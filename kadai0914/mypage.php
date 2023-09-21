<?php

session_start();

if (empty($_SESSION['name'])) {
  
  header('Location: http://127.0.0.1:8081/service.php');
  exit;
}
?>

ようこそマイページへ
<?= $_SESSION['name']; ?>の人です

<a href="logout.php">ログアウトする</a>
