<?php //main.php
// 초기화
require_once 'includes/init.php';
require_once 'includes/elements.php';

// 사이트 로직 ------------------------------------------------
$content = '';

switch($ACT) {
  case 'main':
    // $content .= makeBannerSlide();
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
  // 'head' => makeHead(),
  // 'header' => makeHeader(),
  // 'content' => $content,
  // 'leftmenu' => makeSidemenu('left'),
  // 'rightmenu' => makeSidemenu('right'),
  // 'footer' => makeFooter(),
  // 'postScript' => getLibraries('postscripts'),
  // 'popup' => makePopupList($popupData),
);
echo renderElement(TPL.'template.html', $html_data);