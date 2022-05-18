<?php // user.php

// 컨펌 처리
if (isset($_POST['confirm'])) {
  switch ($DO) {
    case 'login': 
      $success = false;
      $userid = $_POST['userid'];
      $password = $_POST['password'];
    
      $sql = "SELECT * FROM museum_user WHERE userid='$userid'";
      $res = mysqli_query($DB, $sql);

      if (mysqli_num_rows($res) == 1) {
        $userdata = mysqli_fetch_assoc($res);
        if ($userdata['password'] == AES_ENCRYPT($password, $password)) {
          setUserData($userdata);
          unset($_SESSION['MSG']);
          // pushLog('로그인 성공. 환영합니다.', 'success');
          if ($_GET['action'] == 'user' && $_GET['do'] == 'login') {
            header("Location: $MAIN");
            break;
          }
        } else {
          pushLog('로그인을 실패하였습니다. 비밀번호를 확인해 주세요', 'error');
        }
      } else {
        pushLog('로그인을 실패하였습니다. 아이디가 존재하지 않습니다.', 'error');
      }
      header("Location: $MAIN?action=$_GET[action]&do=$_GET[do]");
      break;

    case 'signup':
      $userid = $_POST['userid'];
      $password = $_POST['password'];
      $password_check = $_POST['password_check'];
      $nickname = $_POST['nickname'];
      $email = $_POST['email'];
      $email .= $_POST['domain']? '@'.$_POST['domain'] : '';
      $avatar = $_POST['avatar'];
      $link = $_POST['link'];
      $sql = "INSERT INTO museum_user 
              (userid, password, nickname, email, avatar, link) 
              VALUES
              ('$userid', AES_ENCRYPT('$password', '$password'), '$nickname', '$email', '$avatar', '$link') ";
      mysqli_query($DB, $sql);
      setUserData([
        'userid' => $userid,
        'nickname' => $nickname,
        'groups' => 'user'
      ]);
      pushLog('회원가입을 완료하였습니다.', 'success');
      header("Location: $MAIN");
      break;

    case 'edit':
      // TODO: 비밀번호 체크
      $userid = $_POST['userid'];
      $password = $_POST['password'];
      $password_check = $_POST['password_check'];
      $nickname = $_POST['nickname'];
      $email = $_POST['email'];
      $avatar = $_POST['avatar'];
      $link = $_POST['link'];
      $sql = "UPDATE museum_user SET 
              password = AES_ENCRYPT('$password', '$password'), 
              nickname = '$nickname', 
              email = '$email', 
              avatar = '$avatar', 
              link = '$link'
              WHERE userid = '$userid' ";
      mysqli_query($DB, $sql);
      setUserData([
        'userid' => $userid,
        'nickname' => $nickname,
        'groups' => 'user'
      ]);
      pushLog('정보수정을 완료하였습니다.', 'success');
      header("Location: $MAIN?action=user&do=mypage");
      break;
      
  }
}
