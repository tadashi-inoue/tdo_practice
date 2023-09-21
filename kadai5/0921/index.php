<?php
session_start();
require_once('function.php');

$page = 1 ; 
if ($_SESSION['page']) {
  $page = $_SESSION['page'];
}

if (!empty($_GET['page']) and is_numeric($_GET['page'])) {
    $page = $_GET['page'];
}



$ret = get_users($page);
$_SESSION['page'] = $page;
?>


<?php
foreach($ret as $key => $val) {
?>
<div>
<h2><?= $val['name'] ?></h2>
<h2><?= $val['email'] ?></h2>
</div>
<?php } ?>
