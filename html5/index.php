<?php
  $error = $_GET['error'];
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="send.php" method="post">
      <p>社員名</p>
      <input type="text" name="name">
      <input type="submit" value="送信する"><br>
      <?php if($error == 1): ?>
        入力は必須です。
      <?php endif; ?>
    </form>
  </body>
</html>
