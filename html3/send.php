<?php
  $info = $_POST['name'];

  $company['sova']['tadao']['address'] = 'saitama';
  $company['sova']['tadao']['hobby'] = 'design';
  $company['sova']['nami']['address'] = 'tokyo';
  $company['sova']['nami']['hobby'] = 'soba shokunin';
  $company['sova']['ide']['address'] = 'chiba';
  $company['sova']['ide']['hobby'] = 'nothing';
  $count = 0;
?>

<?php foreach($company['sova'] as $key => $val): ?>
<ul>
  <?php if($key == $info): ?>
  <h2><?= $info ?></h2>
  <li>住所</li><li><?= $val['address']; ?></li>
  <li>趣味</li><li><?= $val['hobby']; ?></li>
  <?php $count = $count + 1 ; ?>
  <?php endif; ?>
</ul>
<?php endforeach; ?>
<?php if($count == 0) { ?>
  一致する人はいません
<?php } exit; ?>

<?php
  //echo "<pre>";
  //var_dump($company);
  //exit;

  //if (empty($info['name'])) {
    //header('location: http://127.0.0.1:8081/index.php?error=1');
    //exit;
  //}
?>

<!DOCTYPE HTML>
<html lang="eg">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
      <p>会社名</p><p><?= $info['name']; ?></p>
  </body>
</html>
