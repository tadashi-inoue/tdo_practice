<?php require_once('function.php'); ?>

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
      <?php require_once('main.php'); ?>
    </main>
    <footer>
      <?= get_footer(); ?>
    </footer>
  </body>
<html>
