<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

//ログインチェック
if ($email == 'ide@ide.com' and $password == '123') {
  $_SESSION['name'] = $email;
  header('Location: http://127.0.0.1:8081/mypage.php');
  exit;
}

  $_SESSION['email'] = $email;
  $_SESSION['password'] = $password;
  header('Location: http://127.0.0.1:8081/service.php');
  exit;

?>
