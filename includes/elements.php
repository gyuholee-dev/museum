<?php //elements.php
// 프리로드
// https://web.dev/i18n/ko/preload-critical-assets/
// Link: </css/style.css>; rel="preload"; as="style"
function preloadLibrary()
{
  global $CONF, $VER, $DEV;
  $version = $VER;
  if ($DEV) {
    // 개발모드일 경우 1일마다 캐시 갱신
    $version .= '.'.date('ymd');
  }
  $library = $CONF['libraries'];
  $html = '';
  foreach ($library as $key => $libs) {
    foreach ($libs as $lib) {
      if ($key == 'styles') {
        header("Link: <$lib?v=$version>; rel=preload; as=style;");
      } elseif ($key == 'scripts') {
        header("Link: <$lib?v=$version>; rel=preload; as=script;");
      } elseif ($key == 'postscripts') {
        header("Link: <$lib?v=$version>; rel=preload; as=script;");
      }
    }
  }
}


// 템플릿을 로드하여 html 엘리먼트 생성
function renderElement(string $template, array $data=array()) : string 
{
  // default data
  $data['main'] = MAIN;

  if (!file_exists($template)) return '';
  $html = file_get_contents($template);
  foreach ($data as $key => $value) {
    $html = str_replace('{'.$key.'}', $value, $html);
  }
  return $html;
}

// ------------------------ 블로그 엘리먼트 함수 ------------------------

// 사이트 타이틀
function getSiteTitle()
{
  global $ACT, $CAT, $DO, $CONF, $INFO;
  $pageData = $CONF['pages'];

  $siteTitle = $INFO['title'];
  if ($INFO['subtitle']) {
    $siteTitle .= ' : '.$INFO['subtitle'];
  } else if ($ACT == 'user' && isset($pageData[$DO])) {
    $siteTitle .= ($pageData[$DO]['title'])?' : '.$pageData[$DO]['title']:'';
  } else if (isset($pageData[$ACT])) {
    if (isset($CAT) && isset($pageData[$ACT]['categories'][$CAT])) {
      $siteTitle .= ' : '.$pageData[$ACT]['categories'][$CAT]['title'];
    } else if ($pageData[$ACT]['title']) {
      $siteTitle .= ' : '.$pageData[$ACT]['title'];
    }
  }
  return $siteTitle;
}

// 헤더링크
function getHeaderLink($type='logo')
{
  global $ACT, $CONF, $INFO;
  $active = ($ACT == 'main') ? 'active' : '';
  $theme = $CONF['theme'];
  $siteUrl = ($_SERVER['HTTP_HOST']=='localhost')?MAIN:$INFO['url'];
  $logo = IMG.$theme['logo'];
  if ($type == 'logo') {
    $logo = IMG.$theme['logo'];
    $headerLink = "<a class='logo $active' href='$siteUrl'><img src='$logo'></a>";
  } else if ($type == 'title') {
    $icon = '<i class="icon"></i>';
    $headerLink = "<a class='logo $active' href='$siteUrl'>$icon<span>$INFO[title]</span></a>";
  }

  return $headerLink;
}

// 라이브러리 링크
function getLibraries($key='styles')
{
  global $CONF, $VER, $DEV;
  $version = $VER;
  if ($DEV) {
    // 개발모드일 경우 1일마다 캐시 갱신
    $version .= '.'.date('ymd');
  }
  $library = $CONF['libraries'][$key];
  $html = '';
  foreach ($library as $lib) {
    if ($key == 'styles') {
      $html .= "<link rel='stylesheet' href='$lib?v=$version'>";
    } elseif ($key == 'scripts') {
      $html .= "<script type='text/javascript' src='$lib?v=$version'></script>";
    } elseif ($key == 'postscripts') {
      $html .= "<script type='text/javascript' src='$lib?v=$version'></script>";
    }
  }
  return $html;
}

// 로그인링크
function getUsermenu($type='link')
{
  global $USER, $MAIN;
  if ($type == 'link') {
    if ($USER) {
      $usermenu = "
        <a href='$MAIN?action=user&do=mypage'>마이페이지</a>
      ";
    } else {
      $usermenu = "
        <a href='$MAIN?action=user&do=login'>로그인</a>
      ";
    }
  } else if ($type == 'icon') {
    if ($USER) {
      $usermenu = "
        <a class='icon' href='$MAIN?action=user&do=mypage'><i class='xi-user-o'></i></a>
      ";
    } else {
      $usermenu = "
        <a class='icon' href='$MAIN?action=user&do=login'><i class='xi-log-in'></i></a>
      ";
    }

  }
  return "<div class='usermenu'>$usermenu</div>";
}

// 서치박스
function getSerchbox()
{
  $searchbox = "
    <form class='searchbox' name='search' method='get' action=''>
      <input type='text' name='query' placeholder='검색어를 입력하세요'>
      <button type='submit' class='btn none icon'><i class='xi-search'></i></button>
    </form>
  ";
  return $searchbox;
}

// 네비게이션 출력
function getNavmenu($sep=null)
{
  global $CONF, $ACT, $CAT, $MAIN;
  $main = MAIN;
  $pages = $CONF['pages'];

  $navmenu = '';
  $lastKey = array_key_last($pages);
  foreach ($pages as $key => $data) {
    if (!isset($data['categories'])) continue;

    $defCat = '';
    $defSubkey = '';

    $submenu = '';
    $i = 0;
    foreach ($data['categories'] as $subKey => $value) {
      if ($i == 0) {
        $defCat = $value;
        $defSubkey = $subKey;
      }
      $active = ($CAT==$subKey)?'active':'';
      if ($value['type']=='link') {
        $submenu .="<li class='item $active'><a href='$value[url]'>$value[title]</a></li>";
      } else {
        $submenu .="<li class='item $active'><a href='$MAIN?action=$key&category=$subKey'>$value[title]</a></li>";
      }
      $i++;
    }
    if ($defCat['type']=='link') {
      $menuLink = $defCat['url'];
    } else {
      $menuLink = "$MAIN?action=$key&category=$defSubkey";
    }

    $active = ($ACT==$key)?'active':'';
    $sep = ($lastKey!=$key)?"<i class='sep xi-minus xi-rotate-90'></i>":'';
    $navmenu .= "
      <li class='item $active'>
        <a href='$menuLink' class='dep_btn1'><label>$data[title]</label></a>$sep
        <ul class='subnmenu'>
          $submenu
        </ul>
      </li>
    ";
  }
  
  // return "<ul class='menu'>$navmenu</ul>";
  return $navmenu;
}

// 버튼
function getButton($type, $label='', $attr=array())
{
  $tag = 'button';
  if ($type == 'submit' || $type == 'reset') {
    $tag = 'input';
  }
  $class = 'btn';
  if (isset($attr['class'])) {
    $class .= ' '.$attr['class'];
  }

  $button = "<$tag class='$class' type='$type' ";
  foreach ($attr as $key => $value) {
    $button .= "$key='$value' ";
  }
  if ($tag=='input' && !isset($attr['value'])) {
    $button .= "value='$label' ";
  }
  $button .= ">";
  if ($tag=='button') {
    $button .= "$label</$tag>";
  }
  return $button;
}

// 기본요소 출력 --------------------------------------------------------------------------

// 헤드 출력
function makeHead()
{
  global $CONF, $INFO;
  $siteTitle = getSiteTitle();
  $description = $INFO['description'];
  $libraries = $CONF['libraries'];
  $favicon = IMG.$CONF['theme']['favicon'];

  $head = "
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='shortcut icon' href='$favicon'>
    <title>$siteTitle</title>
    <meta name='description' content='$description'>
  ";

  $head .= getLibraries('styles');
  $head .= getLibraries('scripts');
  $head .= getLibraries('deferscripts');

  return $head;
}

// 탑메뉴
function makeTopmenu()
{
  $header_data = array(
    'headerLink' => getHeaderLink('logo'),
    'usermenu' => getUsermenu('icon'),
    'searchbox' => getSerchbox(),
  );
  $header = renderElement(TPL.'topmenu.html', $header_data);
  return $header;
}

// 네비게이션메뉴
function makeNavmenu()
{
  $header_data = array(
    'navmenu' => getNavmenu(),
  );
  $header = renderElement(TPL.'navmenu.html', $header_data);
  return $header;
}

// 하단메뉴
function makeFootmenu()
{
  $footmenu_data = array(
    // 'bottomLink' => getbottomLink(),
  );
  $footmenu = renderElement(TPL.'footmenu.html', $footmenu_data);
  return $footmenu;
}

// 푸터 출력
function makeFooter()
{
  global $INFO;

  $footer_data = array(
    'copyright' => $INFO['copyright'],
  );
  $footer = renderElement(TPL.'footer.html', $footer_data);
  return $footer;
}

// 본문 출력 -------------------------------------------------------------------------------

// 왼쪽메뉴
function getLeftmenu($data) 
{
  global $ACT, $CAT, $MAIN;
  if (!isset($data['categories'])) return '';
  $catData = $data['categories'];
  $html = '';  
  foreach ($catData as $key => $data) {
    $active = ($CAT==$key)?'active':'';
    $class = ($CAT==$key)?'xi-angle-right':'';
    $link = "$MAIN?action=$ACT&category=$key";
    $html .= "<li class='item $active'><a class='$class' href='$link'>$data[title]</a></li>";
  }
  return "<ul>$html</ul>";
}

// 헤더 이미지
function getHeaderImg($data)
{
  if ($data['headerImg']=='') return '';
  $IMG = IMG;
  $imageUrl = $IMG.'header/'.$data['headerImg'];
  $html = "
    <div class='sub_visual'
      style='background-image: url($imageUrl);'
    ></div>
  ";
  return $html;
}

// 로케이션
function getLocation($data)
{
  global $ACT, $CAT;
  $catData = $data['categories'][$CAT];
  $html = "
    <span class='home'>HOME</span>
    <i class='sep xi-angle-right'></i>
    <span class='subject'>$data[title]</span>
    <i class='sep xi-angle-right'></i>
    <span class='category'>$catData[title]</span>
  ";

  return $html;
}

// 서브타이틀
function getSubTitle($data)
{
  global $ACT, $CAT;
  $catData = $data['categories'][$CAT];
  $html = "$catData[title]<span class='name'>$catData[name]</span>";

  return $html;
}

function getInfoList($data, $postType='html')
{
  $html = '';
  foreach ($data as $key => $value) {
    if ($key == '첨부파일') {
      if ($value == '') continue;
      $fileName = basename($value);
      $value = "<a href='$value' download='$fileName'>$fileName</a>";
    }
    if ($postType=='exhibit') {
      $html .= "
        <li>
          <span class='tit'>$key</span>
          <span class='cont'>$value</span>
        </li>
      ";
    } else if ($postType=='html' || $postType=='media') {
      $html .= "
        <dl class='dlType03'>
          <dt>$key</dt>
          <dd>$value</dd>
        </dl>
      ";
    }
  }
  return "<ul>$html</ul>";
}

// 컨텐츠 본문 출력
// postType: html, media, exhibit
function getPostContent($postid=1, $postType='html')
{
  global $CONF, $DB, $DBCONF;
  global $ACT, $CAT, $DO, $ID, $PAGE;
  global $MAIN;

  $tableName = $CONF['pages'][$ACT]['table'];
  $table = $DBCONF['prefix'].$tableName;
  $sql = "SELECT * FROM $table "; 
  $sql .= "WHERE subject='$ACT' AND category='$CAT' AND postid='$postid'";
  $res = mysqli_query($DB, $sql);

  $html = '';
  while ($data = mysqli_fetch_assoc($res)) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }
    $wdate = date('Y-m-d', $wdate);
    $hits = rand(128, 1024);
    $info = ($info)?json_decode($info,true):array();
    if ($postType=='html') {
      $info['첨부파일'] = ($file)?FILE.$ACT.'/'.$CAT.'/'.$file:'';
    }
    $info = getInfoList($info, $postType);
    $image = '';
    $fileExt = getExt($file);
    if ($fileExt == "jpg" || $fileExt == "jpeg" || $fileExt == "png" || $fileExt == "gif") {
      $imgClass = ($postType == 'html')?'img-center img-fit':'img-center';
      $imgStyle = ($postType != 'exhibit')?'margin-bottom:15px;':'';
      $image = "<img class='$imgClass' src='".FILE.$ACT.'/'.$CAT.'/'.$file."' style='$imgStyle'>";
    }

    $post_data = array(
      'image' => $image,
      'title' => $title,
      'nickname' => $nickname,
      'wdate' => $wdate,
      'hits' => $hits,
      'info' => $info,
      'content' => "<pre>$content</pre>",
      // 'gallery' => renderElement(TPL.'gallery.html'),
      'gallery' => '',
      'listUrl' => "$MAIN?action=$ACT&category=$CAT&page=$PAGE",
      'postNav' => getPostNav($postid),
    );
    $html .= renderElement(TPL.'post_'.$postType.'.html', $post_data);
  }

  return $html;
}

// 컨텐츠 본문 페이지 출력
function getPageContent()
{
  global $CONF, $DB, $DBCONF;
  global $ACT, $CAT, $DO, $ID, $PAGE;
  global $MAIN;

  $table = $DBCONF['prefix'].$CONF['pages'][$ACT]['table'];
  $sql = "SELECT * FROM $table "; 
  $sql .= "WHERE subject='$ACT' AND category='$CAT'
           ORDER BY postid DESC LIMIT 1 ";
  $res = mysqli_query($DB, $sql);
  if (mysqli_num_rows($res) > 0) {
    $data = mysqli_fetch_assoc($res);
    return "<pre>$data[content]</pre>";
  } else {
    return '';
  }
}

// 포스트 내비게이션
function getPostNav($postid)
{
  global $DB, $CONF, $DBCONF;
  global $ACT, $CAT, $DO, $ID, $PAGE;
  global $MAIN, $DEV;

  $prev = $next = '';

  $table = $DBCONF['prefix'].$CONF['pages'][$ACT]['table'];
  $sql = "SELECT * FROM $table 
          WHERE subject='$ACT' AND category='$CAT' AND postid < '$postid' ORDER BY postid DESC LIMIT 1";
  $res = mysqli_query($DB, $sql);
  if (mysqli_num_rows($res) > 0) {
    $data = mysqli_fetch_assoc($res);
    $prev = "<a href='$MAIN?action=$ACT&category=$CAT&do=post&postid=$data[postid]&page=$PAGE'>$data[title]</a>";
  } else {
    if ($DEV) {
      $sql = "SELECT * FROM $table 
              WHERE subject='$ACT' AND category='$CAT' ORDER BY postid DESC LIMIT 1";
      $res = mysqli_query($DB, $sql);
      $data = mysqli_fetch_assoc($res);
      $prev = "<a href='$MAIN?action=$ACT&category=$CAT&do=post&postid=$data[postid]&page=$PAGE'>$data[title]</a>";
    } else {
      $prev = '이전글이 없습니다.';
    }
  }

  $sql = "SELECT * FROM $table 
          WHERE subject='$ACT' AND category='$CAT' AND postid > '$postid' ORDER BY postid ASC LIMIT 1";
  $res = mysqli_query($DB, $sql);
  if (mysqli_num_rows($res) > 0) {
    $data = mysqli_fetch_assoc($res);
    $next = "<a href='$MAIN?action=$ACT&category=$CAT&do=post&postid=$data[postid]&page=$PAGE'>$data[title]</a>";
  } else {
    if ($DEV) {
      $sql = "SELECT * FROM $table 
              WHERE subject='$ACT' AND category='$CAT' ORDER BY postid ASC LIMIT 1";
      $res = mysqli_query($DB, $sql);
      $data = mysqli_fetch_assoc($res);
      $next = "<a href='$MAIN?action=$ACT&category=$CAT&do=post&postid=$data[postid]&page=$PAGE'>$data[title]</a>";
    } else {
        $next = '다음글이 없습니다.';
    }
  }

  $html = "
    <dl>
      <dt>이전글</dt><dd>$prev</dd>
    </dl>
    <dl>
      <dt>다음글</dt><dd>$next</dd>
    </dl>
  ";

  return $html;
}

// 컨텐츠 리스트 출력
// listType : preview, list, gallery
function getPostList($listType, $start=0, $items=6)
{
  global $CONF, $DB, $DBCONF;
  global $ACT, $CAT, $PAGE;
  global $MAIN;
  global $DEV;

  $table = $DBCONF['prefix'].$CONF['pages'][$ACT]['table'];
  $sql = "SELECT COUNT(*) FROM $table
          WHERE subject='$ACT' AND category='$CAT' ";
  $res = mysqli_query($DB, $sql);
  $count = mysqli_fetch_row($res)[0];
  $pageCount = ceil($count/$items);

  $sql = "SELECT * FROM $table
          WHERE subject='$ACT' AND category='$CAT'
          ORDER BY postid DESC
          LIMIT $start, $items ";
  // 개발모드일 경우 카운트 초과 페이지도 랜덤 리스트로 출력
  if ($DEV && $PAGE > $pageCount) {
      $sql = "SELECT * FROM $table
            WHERE subject='$ACT' AND category='$CAT'
            ORDER BY RAND()
            LIMIT 0, $items ";
  }
  $res = mysqli_query($DB, $sql);

  $postList = '';
  $pageNav = '';
  $randNum = rand(128, 1024);
  if (mysqli_num_rows($res) > 0) {
    while ($data = mysqli_fetch_assoc($res)) {
      foreach ($data as $key => $value) {
        $$key = $value;
      }
      $wdate = date('Y-m-d', $wdate);
      $hits = rand(128, 1024);
      $url = "$MAIN?action=$ACT&category=$CAT&do=post&postid=$postid&page=$PAGE";
      $image = FILE.$ACT.'/'.$CAT.'/'.$file;
      $info = json_decode($info,true);
      $infomation = '';
      $summary = '';
      if ($ACT == 'exhibition') {
        $infomation = "
          <p class='info date'>$info[전시기간]</p>
        ";
        $content = strip_tags($content);
        $summary = "<div class='cont'>$content</div>";
      } else if ($ACT == 'education') {
        $infomation = "
          <p class='info date'><label>교육일자</label>$info[교육일자]</p>
          <p class='info place'><label>교육장소</label>$info[교육장소]</p>
          <p class='info target'><label>교육대상</label>$info[교육대상]</p>
        ";
      }
  
      if ($listType == 'preview') {
        $postList .= "
          <li>
            <div class='img' style='text-align:center;'>
              <img src='$image'>
            </div>
            <div class='text'>
              <p class='tit'>$title</p>
              $infomation
              $summary
              <div class='detail_btn_wrap'>
                <a href='$url' class='detail_btn'>자세히 보기</a>
              </div>
            </div>
          </li>
        ";
      } else if ($listType == 'gallery') {
        $postList .= "
          <li>
            <div class='img' style='height: 153.44px;'>
              <a href='$url'><img src='$image' style='width:100%;'></a>
            </div>
            <div class='text' style='text-overflow:ellipsis; white-space:nowrap; overflow:hidden'>
              <a href='$url'>$title</a>
            </div>
          </li>
        ";
      } else if ($listType == 'table') {
        $postid += $randNum;
        $postList .= "
          <tr class='toptr'>
            <td class='number'>$postid</td>
            <td class='subject'>
              <a href='$url' title='$title'>$title</a>
            </td>
            <td class='writer'>$nickname</td>
            <td class='date'>$wdate</td>
            <td class='hits'>$hits</td>
          </tr>
        ";
      }
    }
    $pageNav = getPageNav($PAGE, $pageCount);
  } else {
    if ($listType == 'table') {
      $postList = "
        <tr><td colspan='5' style='width:100%; height:300px; line-height:300px; text-align:center'>
          등록된 게시물이 없습니다.
        </td></tr>
      ";
    } else {
      $postList = "
        <li style='width:100%; height:300px; line-height:300px; text-align:center'>
          등록된 포스트가 없습니다.
        </li>
      ";
    }
  }
  $list_data = array(
    'postList' => "<ul class='${listType}_list'>$postList</ul>",
    'postSearch' => "",
    'pageNav' => $pageNav,
  );
  $html = renderElement(TPL.'list_'.$listType.'.html', $list_data);

  return $html;
}

// 페이지 내비게이션
function getPageNav($page=1, $pageCount=10)
{
  global $ACT, $CAT;
  global $MAIN;
  global $DEV;

  $btn_page = '';
  for ($i=1; $i <= $pageCount; $i++) { 
    $current = ($page == $i)?'current':'';
    $url = "$MAIN?action=$ACT&category=$CAT&page=$i";
    $btn_page .= "<a class='page_num $current' href='$url'>$i</a>";
  }
  // 개발모드일 경우 10페이지 채움
  if ($DEV && $pageCount < 10) {
    for ($i=$pageCount+1; $i <= 10; $i++) { 
      $current = ($page == $i)?'current':'';
      $url = "$MAIN?action=$ACT&category=$CAT&page=$i";
      $btn_page .= "<a class='page_num $current' href='$url'>$i</a>";
    }
  }

  $btn_first = '';
  $btn_prev = '';
  if ($page > 1) {
    $url_first = "$MAIN?action=$ACT&category=$CAT&page=1";
    $btn_first = "<a class='first_page' href='$url_first'><i class='xi-angle-left'></i></a>";
    $url_prev = "$MAIN?action=$ACT&category=$CAT&page=".($page-1);
    $btn_prev = "<a class='prev_page' href='$url_prev'><i class='xi-arrow-left'></i></a>";
  } else {
    $btn_first = "<a class='first_page disabled'><i class='xi-angle-left'></i></a>";
    $btn_prev = "<a class='prev_page disabled'><i class='xi-arrow-left'></i></a>";
  }

  $btn_next = '';
  $btn_last = '';
  if ($page < $pageCount) {
    $url_next = "$MAIN?action=$ACT&category=$CAT&page=".($page+1);
    $btn_next = "<a class='next_page' href='$url_next'><i class='xi-arrow-right'></i></a>";
    $url_last = "$MAIN?action=$ACT&category=$CAT&page=$pageCount";
    $btn_last = "<a class='last_page' href='$url_last'><i class='xi-angle-right'></i></a>";
  } else {
    $btn_next = "<a class='next_page disabled'><i class='xi-arrow-right'></i></a>";
    $btn_last = "<a class='last_page disabled'><i class='xi-angle-right'></i></a>";
  }

  return $btn_first.$btn_prev.$btn_page.$btn_next.$btn_last;
}

// 컨텐츠 출력
// listType : preview, list, gallery
// postType: html, media, exhibit
function makeContents()
{
  global $CONF;
  global $ACT, $CAT, $DO, $ID, $PAGE;
  $html = '';

  $pageData = $CONF['pages'][$ACT];
  $listType = $pageData['listType'];
  $postType = $pageData['postType'];
  $viewType = $CONF['pages'][$ACT]['categories'][$CAT]['type'];

  $content = '';
  if ($ACT == 'guide' && $CAT == 'reserve') {
    $content = renderElement(TPL.'post_reserve.html');
  } else if ($viewType == 'page') {
    $content = getPageContent();
  } else if ($viewType == 'link') {
    $content = "";
    header('Location: '.$CONF['pages'][$ACT]['categories'][$CAT]['url']);
  } else if ($DO == 'post') {
    $content = getPostContent($ID, $postType);
  } else if ($DO == 'list') {
    $content .= getPostList($listType, ($PAGE-1)*$pageData['items'], $pageData['items']);
  }

  $contents_data = array(
    'do' => $DO,
    'action' => $ACT,
    'title' => "<h2>$pageData[title]</h2>",
    'leftmenu' => getLeftmenu($pageData),
    'headerImg' => getHeaderImg($pageData),
    'location' => getLocation($pageData),
    'subTitle' => getSubTitle($pageData),
    'content' => $content,
  );
  $html .= renderElement(TPL.'contents.html', $contents_data);
  return $html;
}

// 유저페이지 출력 -------------------------------------------------------------------------------

// 유저페이지 출력
function makeUserPage() : string
{
  global $DB, $DBCONF, $USER, $DO;
  if (!isset($DO) || !isset($USER)) return false; 

  if ($DO == 'mypage') {
    $userid = $USER['userid'];
    $table = $DBCONF['prefix'].'user';
    $sql = "SELECT * FROM $table WHERE userid = '$userid' ";
    $res = mysqli_query($DB, $sql);
    $data = mysqli_fetch_assoc($res);
  
    $mypage_data = array(
      'userid' => $data['userid'],
      'nickname' => $data['nickname'],
      'email' => $data['email'],
      'avatar' => $data['avatar'],
      'link' => $data['link']
    );
    $html = renderElement(TPL.'mypage.html', $mypage_data);
    
  } else {
    $html = renderElement(TPL.$DO.'.html');
  }
  
  return $html;
}
