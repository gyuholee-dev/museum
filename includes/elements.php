<?php //elements.php
// 프리로드
// https://web.dev/i18n/ko/preload-critical-assets/
// Link: </css/style.css>; rel="preload"; as="style"
function preloadLibrary()
{
  global $CONF;
  $library = $CONF['libraries'];
  $html = '';
  foreach ($library as $key => $libs) {
    foreach ($libs as $lib) {
      if ($key == 'styles') {
        header("Link: <$lib>; rel=preload; as=style;");
      } elseif ($key == 'scripts' || $key == 'deferscripts') {
        header("Link: <$lib>; rel=preload; as=script;");
      } elseif ($key == 'postscripts') {
        header("Link: <$lib>; rel=preload; as=script;");
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
  global $ACT, $DO, $CONF, $INFO;
  $siteTitle = $INFO['title'];
  if ($INFO['subtitle']) {
    $siteTitle .= ' : '.$INFO['subtitle'];
  } else if ($ACT == 'user' && isset($CONF['pages'][$DO])) {
    $siteTitle .= ($CONF['pages'][$DO]['title'])?' : '.$CONF['pages'][$DO]['title']:'';
  } else if (isset($CONF['pages'][$ACT])) {
    $siteTitle .= ($CONF['pages'][$ACT]['title'])?' : '.$CONF['pages'][$ACT]['title']:'';
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
  if ($type == 'logo') {
    $logo = IMG.'icons/'.$theme['logo'];
    $link = "<a href='$siteUrl'><img src='$logo'></a>";
  } else if ($type == 'title') {
    $icon = '<i class="logo BI-icon-SL"></i>';
    $link = "<a href='$siteUrl'>$icon<span>$INFO[title]</span></a>";
  }

  $headerLink = "
    <div class='title $active'>
      $link<span class='sep'><i class='xi-angle-right'></i></span>
    </div>
  ";

  return $headerLink;
}

// 라이브러리 링크
function getLibraries($key='styles')
{
  global $CONF;
  $library = $CONF['libraries'][$key];
  $html = '';
  foreach ($library as $lib) {
    if ($key == 'styles') {
      $html .= "<link rel='stylesheet' href='$lib'>";
    } elseif ($key == 'scripts') {
      $html .= "<script type='text/javascript' src='$lib'></script>";
    } elseif ($key == 'deferscripts') {
      $html .= "<script type='text/javascript' src='$lib' defer='defer'></script>";
    } elseif ($key == 'postscripts') {
      $html .= "<script type='text/javascript' src='$lib'></script>";
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
        <a href='$main?action=user&do=mypage'>Mypage</a>
        <a href='$main?action=user&do=logout'>Logout</a>
      ";
    } else {
      $loginLink = "
        <a href='$main?action=user&do=login'>Login</a>
        <a href='$main?action=user&do=signup'>Signup</a>
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
  return $loginLink;
}

// 네비게이션 출력
function getNavmenu($sep=null)
{
  global $CONF, $ACT;
  $main = MAIN;
  $pages = $CONF['pages'];

  $navmenu = '';
  foreach ($pages as $key => $conf) {
    $active = ($ACT==$key)?'active':'';
    $navmenu .= "<li class='$active'><a href='$main?action=$key'>$conf[title]</a></li>";
    if ($sep && $key != array_key_last($pages)) {
      $navmenu .= "<span class='sep'>$sep</span>";
    }
  }
  
  $navmenu = '<ul class="menu main">'.$navmenu.'</ul>';
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

// --------------------------------------------------------------------------

// 헤드 출력
function makeHead()
{
  global $CONF, $INFO;
  $siteTitle = getSiteTitle();
  $description = $INFO['description'];
  $libraries = $CONF['libraries'];
  $favicon = IMG.'icons/'.$CONF['theme']['favicon'];

  $head = "
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=0.75'>
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
    'navmenu' => getNavmenu('<i class="xi-minus xi-rotate-90"></i>'),
    'headerLink' => getHeaderLink('title'),
    'loginLink' => getLoginLink('icon')
  );
  $header = renderElement(TPL.'header.html', $header_data);
  return $header;
}

// 푸터 출력
function makeFooter()
{
  global $INFO;
  $footer = "
    <p>$INFO[copyright]</p>
  ";
  return $footer;
}

