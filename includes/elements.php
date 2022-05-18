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
function makeHeaderImg($data)
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


// 컨텐츠 출력
function makeContents()
{
  global $CONF, $ACT, $INFO, $USER;
  $html = '';

  $pageData = $CONF['pages'][$ACT];

  $contents_data = array(
    'title' => "<h2>$pageData[title]</h2>",
    'leftmenu' => getLeftmenu($pageData),
    'headerImg' => makeHeaderImg($pageData),
    'location' => getLocation($pageData),
    'subTitle' => getSubTitle($pageData),
    'innerContent' => '',
  );
  $html .= renderElement(TPL.'contents.html', $contents_data);
  return $html;
}

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
