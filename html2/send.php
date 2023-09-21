<?php
  $name = $_POST['name'];

  //$pref[] = 'tokyo';
  //$pref[] = 'saitama';
  //$pref[] = 'chiba';
?>


<?php
  $company['sova']['tadao']['address'] = 'saitama';
  $company['sova']['tadao']['hobby'] = 'design';
  $company['sova']['nami']['address'] = 'tokyo';
  $company['sova']['nami']['hobby'] = 'soba shokunin';
  $company['sova']['ide']['address'] = 'chiba';
  $company['sova']['ide']['hobby'] = 'nothing';
?>

<?php foreach($company['sova'] as $key => $val): ?>
  <ul>
    <?php if($key == $name): ?>
    <li>住所</li><li><?= $val['address'] ?></li>
    <li>趣味</li><li><?= $val['hobby'] ?></li>
  </ul>
<?php endforeach; ?>
<?php } exit; ?>

<?php
  echo "<pre>";
  var_dump($company);
  exit;

  if (empty($name['name'])) {
    header('location:http://127.0.0.1:8081/index.php?error=1');
    exit;
  }
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <p>従業員名</p><p><?= $name['name']; ?></p>
  </body>
</html>
