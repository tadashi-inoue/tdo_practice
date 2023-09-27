<?php
  
  require_once('function.php');

  session_start();

  $page = 1;
  if (!empty($_SESSION['page'])) {
    $page = $_SESSION['page'];
  }

  if (!empty($_GET['page']) and is_numeric($_GET['page'])) {
    $page = $_GET['page'];
  }

  $ret = get_member_list($page);
  $_SESSION['page'] = $page;

?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Member List</title>
  </head>
  <body>
  <?php foreach ($ret as $key => $val): ?>
    <p><?= $val ?></p>
    <p><?= $val['mail'] ?></p>
  <?php endforeach; ?> 
  </body>
</html>
