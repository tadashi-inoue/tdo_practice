<?php
  $error = $_GET['error'];
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <form action="function1.php" method="post">
      <h3>名前</h3>
      <input type="text" name="name">
      <input type="submit" value="送信する">
      <?php if($error == 1): ?>
      必須です
      <?php endif; ?>
    </form>
  </body>
</html>
