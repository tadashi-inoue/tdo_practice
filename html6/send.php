<?php
  $name = $_POST['name'];

  if(empty($name)) {
    header('location: http://127.0.0.1:8081/index.php?error=1');
  }
    //echo "<pre>";
    //var_dump($name);
    //exit;
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
  </body>
</html>
