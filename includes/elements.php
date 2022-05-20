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
    $link = "<a href='$siteUrl'><img src='$logo'></a>";
  } else if ($type == 'title') {
    $icon = '<i class="icon"></i>';
    $link = "<a href='$siteUrl'>$icon<span>$INFO[title]</span></a>";
  }

  $headerLink = "<h1 class='logo $active'>$link</h1>";

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
function getLoginLink($type='link')
{
  global $USER;
  $main = MAIN;
  if ($type == 'link') {
    if ($USER) {
      $loginLink = "
        <a href='$main?action=user&do=mypage'><span class='ico'>마이페이지</span></a>
      ";
    } else {
      $loginLink = "
        <a href='$main?action=user&do=login'><span class='ico'>로그인</span></a>
      ";
    }
  } else if ($type == 'icon') {
    if ($USER) {
      $loginLink = "
        <a href='$main?action=user&do=mypage'><i class='xi-user-o'></i></a>
      ";
    } else {
      $loginLink = "
        <a href='$main?action=user&do=login'><i class='xi-log-in'></i></a>
      ";
    }

  }
  return "<ul><li class='login'>$loginLink</li></ul>";
}

// 서치박스
function getSerchbox()
{
  $searchbox = renderElement(TPL.'searchbox.html');
  return $searchbox;
}

// 네비게이션 출력
function getNavmenu($sep=null)
{
  global $CONF, $ACT, $CAT, $MAIN;
  $main = MAIN;
  $pages = $CONF['pages'];

  $navmenu = '';
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
        $submenu .="<li class='$active'><a href='$value[url]'>$value[title]</a></li>";
      } else {
        $submenu .="<li class='$active'><a href='$MAIN?action=$key&category=$subKey'>$value[title]</a></li>";
      }
      $i++;
    }
    if ($defCat['type']=='link') {
      $menuLink = $defCat['url'];
    } else {
      $menuLink = "$MAIN?action=$key&category=$defSubkey";
    }

    $active = ($ACT==$key)?'active':'';
    $navmenu .= "
      <li class='dep1 $active'>
        <a href='$menuLink' class='dep_btn1'>$data[title]</a>
        <div class='sub'>
          <ul class='gnb_sub'>
            $submenu
          </ul>
        </div>
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

// 헤더 출력
function makeHeader()
{
  $header_data = array(
    'headerLink' => getHeaderLink('logo'),
    'loginLink' => getLoginLink('link'),
    'searchbox' => getSerchbox(),
    'navmenu' => getNavmenu(),
  );
  $header = renderElement(TPL.'header.html', $header_data);
  return $header;
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
    $link = "$MAIN?action=$ACT&category=$key";
    $html .= "<li class='$active'><a href='$link'>$data[title]</a></li>";
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
  $html = "<span class='home'>HOME</span>";
  $html .= "<span class='loc1 arrow'>$data[title]</span>";
  $html .= "<span class='loc2 arrow'>$catData[title]</span>";

  return $html;
}

// 서브타이틀
function getSubTitle($data)
{
  global $ACT, $CAT;
  $catData = $data['categories'][$CAT];
  $html = "<h3>$catData[title]<span class='eng'>$catData[name]</span></h3>";

  return $html;
}

function getInfoList($data)
{
  $html = '';
  foreach ($data as $key => $value) {
    $html .= "
      <li>
        <span class='tit'>$key</span>
        <span class='cont'>$value</span>
      </li>
    ";
  }
  return "<ul>$html</ul>";
}

// 컨텐츠 본문 출력
// postType: html, media, exhibit
function getPostContent($postType, $postid=1)
{
  global $CONF, $DB;
  global $ACT, $CAT, $DO, $ID, $PAGE;
  global $MAIN;

  $sql = "SELECT * FROM museum_post "; 
  $sql .= "WHERE subject='$ACT' AND category='$CAT' AND postid='$postid'";
  $res = mysqli_query($DB, $sql);

  $html = '';
  while ($data = mysqli_fetch_assoc($res)) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }
    $image = FILE.$ACT.'/'.$CAT.'/'.$file;
    $info = getInfoList(json_decode($info,true));

    $post_data = array(
      'image' => $image,
      'title' => $title,
      'info' => $info,
      'content' => $content,
      'gallery' => renderElement(TPL.'gallery.html'),
      'listUrl' => "$MAIN?action=$ACT&category=$CAT&page=$PAGE",
    );
    $html .= renderElement(TPL.'post_'.$postType.'.html', $post_data);
  }

  return $html;
}

// 컨텐츠 리스트 출력
// listType : preview, list, gallery
function getPostList($listType, $start=0, $items=6)
{
  global $CONF, $DB;
  global $ACT, $CAT, $PAGE;
  global $MAIN;
  global $DEV;

  $sql = "SELECT COUNT(*) FROM museum_post
          WHERE subject='$ACT' AND category='$CAT' ";
  $res = mysqli_query($DB, $sql);
  $count = mysqli_fetch_row($res)[0];
  $pageCount = ceil($count/$items);

  $sql = "SELECT * FROM museum_post
          WHERE subject='$ACT' AND category='$CAT'
          ORDER BY postid DESC
          LIMIT $start, $items ";
  // 개발모드일 경우 카운트 초과 페이지도 랜덤 리스트로 출력
  if ($DEV && $PAGE > $pageCount) {
      $sql = "SELECT * FROM museum_post
            WHERE subject='$ACT' AND category='$CAT'
            ORDER BY RAND()
            LIMIT 0, $items ";
  }
  $res = mysqli_query($DB, $sql);

  $postList = '';
  $pageNav = '';
  if (mysqli_num_rows($res) > 0) {
    while ($data = mysqli_fetch_assoc($res)) {
      foreach ($data as $key => $value) {
        $$key = $value;
      }
      $image = FILE.$ACT.'/'.$CAT.'/'.$file;
      $info = json_decode($info,true);
      $date = $info['전시기간'];
      $content = strip_tags($content);
      $url = "$MAIN?action=$ACT&category=$CAT&do=post&postid=$postid&page=$PAGE";
  
      $postList .= "
        <li>
          <div class='img' style='text-align:center;'>
            <img src='$image'>
          </div>
          <div class='text'>
            <p class='tit'>$title</p>
            <p class='date'>$date</p>
            <div class='cont'>
              $content
            </div>
            <div class='detail_btn_wrap'>
              <a href='$url' class='detail_btn'>자세히 보기</a>
            </div>
          </div>
        </li>
      ";
    }
    $pageNav = getPageNav($PAGE, $pageCount);
  } else {
    $postList = "
        <li style='width:100%; height:300px; line-height:300px; text-align:center'>
          등록된 포스트가 없습니다.
        </li>
    ";
  }
  $list_data = array(
    'postList' => "<ul>$postList</ul>",
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
    $btn_first = "<a class='first_page' href='$url_first'>&nbsp;</a>";
    $url_prev = "$MAIN?action=$ACT&category=$CAT&page=".$page-1;
    $btn_prev = "<a class='prev_page' href='$url_prev'>&nbsp;</a>";
  } else {
    $btn_first = "<a class='first_page'>&nbsp;</a>";
    $btn_prev = "<a class='prev_page'>&nbsp;</a>";
  }

  $btn_next = '';
  $btn_last = '';
  if ($page < $pageCount) {
    $url_next = "$MAIN?action=$ACT&category=$CAT&page=".$page+1;
    $btn_next = "<a class='next_page' href='$url_next'>&nbsp;</a>";
    $url_last = "$MAIN?action=$ACT&category=$CAT&page=$pageCount";
    $btn_last = "<a class='last_page' href='$url_last'>&nbsp;</a>";
  } else {
    $btn_next = "<a class='next_page'>&nbsp;</a>";
    $btn_last = "<a class='last_page'>&nbsp;</a>";
  }

  return $btn_first.$btn_prev.$btn_page.$btn_next.$btn_last;
}

// 컨텐츠 출력
// listType : preview, list, gallery
// postType: html, media, exhibit
function makeContents()
{
  global $CONF;
  global $ACT, $DO, $ID, $PAGE;
  $html = '';

  $pageData = $CONF['pages'][$ACT];
  $listType = $pageData['listType'];
  $postType = $pageData['postType'];

  $content = '';
  if ($DO == 'list') {
    $content .= getPostList($listType, ($PAGE-1)*$pageData['items'], $pageData['items']);
  } else if ($DO == 'post') {
    $content = getPostContent($postType, $ID);
  }

  $contents_data = array(
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
  global $DB, $USER, $DO;
  if (!isset($DO) || !isset($USER)) return false; 

  if ($DO == 'mypage') {
    $userid = $USER['userid'];
    $sql = "SELECT * FROM museum_user WHERE userid = '$userid' ";
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
