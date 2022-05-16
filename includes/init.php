<?php // init.php
// 초기화 ------------------------------------------------
require_once 'includes/functions.php';
ini_set('display_errors', 'On');
ini_set('session.use_strict_mode', 0);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();

// 패스 상수 선언
// define('ROOT', '/'.basename(getcwd()).'/');
define('INC', './includes/');
define('CONF', './configs/');
define('DATA', './data/');
define('FILE', './files/');
define('PAGE', './pages/');
define('IMG', './images/');
define('STL', './styles/');
define('SCT', './scripts/');
define('TPL', './templates/');
define('MAIN', 'main.php');

// 글로벌 변수
global $MSG;
global $INFO, $CONF, $DBCONF; 
global $DB, $USER;
global $ACT, $CAT, $DO;
global $ID, $PAGE, $NUMB;
global $MAIN;
$MAIN = MAIN;

// 메시지
if (isset($_SESSION['MSG'])) {
  $MSG = $_SESSION['MSG'];
  // unset($_SESSION['MSG']); // js 출력시 프린트후 삭제
} else {
  $MSG = [
    'info' => '',
    'success' => '',
    'error' => ''
  ];
}

// 설정파일 로드
$CONF = openJson(CONF.'config.json');
$INFO = openJson(CONF.'info.json');

// DB 초기화 ------------------------------------------------

// DB 설정파일 로드
$dbConfigFile = 'db.museum.json';
if (!fileExists(CONF.$dbConfigFile)) {
  $dbConfigFile = 'db.default.json';
}
$DBCONF = openJson(CONF.$dbConfigFile);

// DB설정 체크, 접속, 테이블 검사
$dbLog = '';
$DB = connectDB($DBCONF);
if (!$DB) {
  $dbLog = 'DB 접속에 실패하였습니다.';
}
if ($dbLog) {
  pushLog($dbLog.' 셋업을 실행해 주세요. [<a href="setup.php">바로가기</a>]', 'error');
}
unset($dbConfigFile, $dbLog);

// 유저 초기화 ------------------------------------------------

// 로그인 체크
if (isset($_SESSION['USER']) && isset($_COOKIE['USER'])) {
  // 세션 유저 키와 쿠키 유저 키를 비교하여 같을 경우에 로그인 인정
  if ($_SESSION['USER']['key'] == json_decode($_COOKIE['USER'], true)['key']) {
    $USER = $_SESSION['USER'];
  }
}
if (!$USER) { // 로그인 안되어 있을 경우
  if (isset($_SESSION['USER'])) {
    unset($_SESSION['USER']);
  }
  setcookie('USER', '', time()-3600);
}

// 사이트 초기화 ------------------------------------------------

/* 리퀘스트
action, category, do, postid, page, numb
*/

$ACT = isset($_REQUEST['action'])?$_REQUEST['action']:'main';
$CAT = isset($_REQUEST['category'])?$_REQUEST['category']:'all';
$DO = ($ACT=='board')?'thread':'list';
$DO = isset($_REQUEST['do'])?$_REQUEST['do']:$DO;
$ID = isset($_REQUEST['postid'])?$_REQUEST['postid']:null;
$PAGE = isset($_REQUEST['page'])?$_REQUEST['page']:1;
$NUMB = isset($_REQUEST['numb'])?$_REQUEST['numb']:1;
