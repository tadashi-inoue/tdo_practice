<?php require_once('function.php'); ?>
<?php 

session_start(); 

$res = $_SESSION['email'];
$res2 = $_SESSION['password'];

?>

<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Top</title>
  </head>
  <body>
    <header>
      <?= get_header(); ?>
    </header>
    <main>
      <h1>今日はセッションをやります。</h1>
      セッションとは、<br>
      ページ遷移をしても保持される配列だと思ってください。<br>
      ただし３つのルールを守ってください。<br>
      1. セッションを使うときはsession_start()という関数を実行する<br>
      2. $_SESSIONという名前の配列しか使えない<br>
      3. セッションを消したいときはsession_destroy()という関数を実行する<br>

      <form action="login.php" method="post">
        email <input type="text" name="email" value="<?= $res; ?>"><br>

        <?php if($res === ''): ?>
          <p>メールアドレスの入力は必須です</p>
        <?php endif; ?>

        password <input type="text" name="password" value="<?= $res2; ?>"><br>

        <?php if($res2 === ''): ?>
          <p>パスワードの入力は必須です</p>
        <?php endif; ?>

        <?php if($res || $res2): ?>
          <p>メールアドレス・パスワードに誤りがあります</p>
        <?php endif; ?>

        <input type="submit" value="送信">
      </form>
    <!---->
    </main>
    <footer>
      <?= get_footer(); ?>
    </footer>
  </body>
<html>
