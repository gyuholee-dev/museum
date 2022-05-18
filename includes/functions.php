<?php //functions.php
// 기초 함수 ------------------------------------------------

// 경고 출력
function alert(string $msg, string $url=null) : void
{
  $script = 'alert("'.$msg.'");';
  $script .= $url?'location.href="'.$url.'";':'';
  $script = "<script>$script</script>";
  echo $script;
}

// 로그 입력
// info, success, error
function pushLog(string $log, string $class='info') : bool
{
  global $MSG;
  $MSG[$class] .= ($MSG[$class] != '')?' | ':'';
  $MSG[$class] .= $log;
  $_SESSION['MSG'] = $MSG;
  return true;
}

// 로그 출력
function printLog() : string
{
  global $MSG;
  $html = '';
  foreach ($MSG as $type => $log) {
    $html .= $log?"<div class='log $type'>$log</div>":'';
  }
  return "<div id='message'>$html</div>";
}

// 파일 존재 검사
function fileExists(string $file) : bool
{
  return file_exists($file);
}

// json 파일 오픈
function openJson($file)
{
  if (!fileExists($file)) {
    return false;
  }
  $json = file_get_contents($file);
  $json = json_decode($json, true);
  return $json;
}

// json 파일 세이브
function saveJson($file, $data)
{
  $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
  return file_put_contents($file, $json);
}

// 코드 생성
// 현재 시간을 소스로 최대 32자 임의 문자열 생성
function makeCode($max=32, $upper=false)
{
  $code = md5(time());
  if ($max <= 32) {
    $code = substr($code, 0, $max);
  }
  if ($upper) {
    $code = strtoupper($code);
  }
  return $code;
}

// 카멜케이스 변환
function toSnake($string) {
  return ltrim(strtolower(preg_replace('/[A-Z]([A-Z](?![a-z]))*/', '_$0', $string)), '_');
}
function toCamel($string) {
  return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $string))));
}

// 숫자를 자릿수 맞춰서 문자열로 변환
function numStr($numb, $numSize)
{
  $add = '0';
  for ($i=0; $i < $numSize; $i++) {
    $add = $add.'0';
  }
  $numb = $add.(string)$numb;
  $numb = substr($numb, 0-$numSize);
  return $numb;
}

// 유저기능 함수 ------------------------------------------------

// 유저 아이디 존재 검사
// TODO: 테이블명 및 필드명 변수처리
function checkId($userid)
{
  global $DB;
  $sql = "SELECT * FROM museum_user WHERE userid = '$userid' ";
  $res = mysqli_query($DB, $sql);
  return mysqli_num_rows($res);
}

// 권한 검사
function checkPerm(int $require) : bool
{
  global $USER, $CONF;
  if (!$USER) {
    return ($CONF['permission']['guest'] >= $require);
  }
  return ($CONF['permission'][$USER['groups']] >= $require);
}

// 글 작성자 체크
// TODO: 글 조회해서 작성자와 비교하는 기능 추가
function isOwner($userid) : bool
{
  global $USER;
  if (!$USER) return false;
  return $USER['userid'] == $userid;
}

// 로그인 처리
// 로그인은 별도 함수로 만들지 않음
// TODO: 권한 정수값 추가
function setUserData(array $userData) : bool
{
  global $USER;
  $USER = array(
    'userid' => $userData['userid'],
    'nickname' => $userData['nickname'],
    'groups' => $userData['groups'],
    'key' => makeCode(),
  );
  $_SESSION['USER'] = $USER;
  setcookie('USER', json_encode($USER), time()+3600);
  return true;
}

// 로그아웃
function logout() : void
{
  global $MSG;
  unsetUserData();
  pushLog('로그아웃되었습니다.', 'info');
  header('Location: main.php');
}

// 로그아웃 처리
function unsetUserData() : bool
{
  global $USER;
  $USER = null;
  unset($_SESSION['USER']);
  setcookie('USER', '', time()-3600);
  return true;
}

// 유저 데이터 삭제
function deleteUserData($userid) : bool
{
  global $DB;
  $sql = "DELETE FROM museum_user WHERE userid = '$userid' ";
  $res = mysqli_query($DB, $sql);
  return $res;
}

// 회원탈퇴
function signout() : bool
{
  global $MSG;
  global $USER;
  if (!$USER) return false;
  if ($USER['groups'] == 'admin') {
    pushLog('관리자는 탈퇴할 수 없습니다.', 'error');
    header('Location: main.php');
    return false;
  }
  $userid = $USER['userid'];
  deleteUserData($userid);
  unsetUserData();
  pushLog('회원탈퇴하였습니다.', 'error');
  return true;
}

// DB 함수 ------------------------------------------------

// AES 암호화
function AES_ENCRYPT($plaintext, $key)
{
  // TODO: PHP 암호화 라이브러리를 통해 암호화 구현
  global $DB;
  $sql = "SELECT AES_ENCRYPT('$plaintext', '$key') AS ciphertext ";
  $result = mysqli_query($DB, $sql);
  $row = mysqli_fetch_assoc($result);
  return $row['ciphertext'];
}

// AES 암호해독
function AES_DECRYPT($ciphertext_raw, $key)
{
  // TODO: PHP 암호화 라이브러리를 통해 해독 구현
  global $DB;
  $sql = "SELECT AES_DECRYPT('$ciphertext_raw', '$key') AS plaintext ";
  $result = mysqli_query($DB, $sql);
  $row = mysqli_fetch_assoc($result);
  return $row['plaintext'];
}

// DB 접속
function connectDB($dbConfig, $log=false)
{
  global $DB;
  global $MSG;
  foreach ($dbConfig as $key => $value) {
    $$key = $value;
  }
  try {
    $DB = mysqli_connect(
      $hostname,
      $username,
      $password,
      $database,
      $port,
      $socket
    );
    if ($log) {
      pushLog('DB 접속 성공', 'success');
    }
    return $DB;
  } catch (Exception $e) {
    if ($log) {
      pushLog('DB 접속 실패: '.$e->getMessage(), 'error');
    }
    return false;
  }
}

// DB 접속해제
function disconnectDB($log=false)
{
  global $DB;
  global $MSG;
  try {
    mysqli_close($DB);
    if ($log) {
      pushLog('DB 접속해제 성공', 'success');
    }
    return null;
  } catch (Exception $e) {
    if ($log) {
      pushLog('DB 접속해제 실패: '.$e->getMessage(), 'error');
    }
    return false;
  }
}

// 테이블 검사
function checkTable($table, $log=false)
{
  global $DB;
  global $MSG;
  
  $sql = "SHOW TABLES LIKE '$table'";
  $rows = mysqli_num_rows(mysqli_query($DB, $sql));
  
  if ($rows == 0) {
    if ($log) {
      pushLog("테이블 없음: $table", 'error');
    }
    return false;
  }
  if ($log) {
    pushLog("테이블 있음: $table", 'success');
  }
  return true;
}
