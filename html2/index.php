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
    <section>
      <form action="send.php" method="post">
        <p>従業員名</p><p><input type="text" name="name"></p>
        <?php if($error == '1'): ?>
          <p>入力は必須です</p>
        <?php endif; ?>
        <input type="submit" value="送信する">
      </form>
    </section>
  </body>
</html>
