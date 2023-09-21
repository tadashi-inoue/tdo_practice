<?php
  $person = $_POST['name'];

  if(empty($person)){
  header('location: http://127.0.0.1:8081/index.php?error=1');
  }

  $sova['tadao']['name'] = 'tadao';
  $sova['tadao']['address'] = 'tokyo';
  $sova['tadao']['hobby'] = 'gohan';
  $sova['nami']['name'] = 'nami';
  $sova['nami']['address'] = 'the earth';
  $sova['nami']['hobby'] = 'sleep';
?>

<?php foreach($sova as $key => $val): ?>
<ul>
  <?php if($key == $person): ?>
  <h2><?= $person; ?></h2>
  <li><?= $val['name']; ?></li>
  <li><?= $val['address']; ?></li>
  <li><?= $val['hobby']; ?></li>
  <?php endif; ?>
</ul>
<?php endforeach; ?>
