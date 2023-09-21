
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<?php
  $name = $_POST['name'];

  //echo "<pre>";
  //var_dump($name);
  //exit;

  if(empty($name)) {
    header('location: http://127.0.0.1:8081/index.php?error=1');
  }

  $company['sova']['tadao']['address'] = "saitama";
  $company['sova']['tadao']['hobby'] = "design";
  $company['sova']['nami']['address'] = "tokyo";
  $company['sova']['nami']['hobby'] = "fashion";
  $company['sova']['ide']['address'] = "chiba";
  $company['sova']['ide']['hobby'] = "noting";
  $count = 0;
?>

<?php foreach($company['sova'] as $key => $val): ?>
<ul>
  <?php if($key == $name): ?>
  <h2><?= $name ?></h2> 
  <li>住所</li><li><?= $val['address']; ?></li>
  <li>趣味</li><li><?= $val['hobby']; ?></li>
  <?php $count = $count + 1 ;?>
  <?php endif; ?>
</ul>
<?php endforeach; ?>

<?php if($count == 0) { ?>
  一致しません。
<?php } exit; ?>
  </body>
</html>
