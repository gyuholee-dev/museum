<?php //main.php
// 초기화
require_once 'includes/init.php';
require_once 'includes/elements.php';

// 사이트 로직 ------------------------------------------------
$content = '';

switch($ACT) {
  case 'main':
    $content = renderElement(TPL.'toppage.html');
    // $content .= makeBannerSlide();
    // $content .= makeWidgetList('exhibition', 3);
    // $content .= makeWidgetList('education', 3);
    // $content .= makeWidgetList('community', 4);
    // $content .= makeWidgetLink(['title'=>'소장품/도서']);
    // $content .= makeWidgetLink(['title'=>'미술관소개']);
    // $content .= makeWidgetLink(['title'=>'스틸아트공방']);
    // $content .= makeWidgetLink(['title'=>'관람안내/예약']);
    break;

  case 'exhibition':
  case 'education':
  case 'collection':
  case 'collection':
  case 'steel_art':
  case 'community':
  case 'guide':
  case 'greeting':
    $content .= makeContents();
    break;

  case 'user':
    if ($USER) {
      switch ($DO) {
        case 'mypage':
          $content .= makeUserPage();
          break;
        case 'logout':
          logout();
          header("Location: $MAIN");
          break;
        case 'signout':
          signout();
          header("Location: $MAIN");
          break;
          
        default:
          header("Location: $MAIN?action=$ACT&do=mypage");
          break;
      }
    } else {
      include INC.'user.php';
      switch ($DO) {
        case 'login':
          $content .= renderElement(TPL.'login.html');
          break;
        case 'signup':
          $content .= renderElement(TPL.'signup.html');
          break;

        default:
          pushLog('로그인 후 이용해주세요.');
          $content .= renderElement(TPL.'login.html');
          break;
      }
    }
    break;

  default : // main
    header("Location: $MAIN");
    break;
}


// 랜더링 ------------------------------------------------
// 프리로드
preloadLibrary();

// 랜더링
$html_data = array(
  'head' => makeHead(),
  'topmenu' => makeTopmenu(),
  'navmenu' => makeNavmenu(),
  'content' => $content,
  // 'leftmenu' => makeSidemenu('left'),
  // 'rightmenu' => makeSidemenu('right'),
  'footmenu' => makeFootmenu(),
  'footer' => makeFooter(),
  'postScript' => getLibraries('postscripts'),
  // 'popup' => makePopupList($popupData),
);
echo renderElement(TPL.'template.html', $html_data);
