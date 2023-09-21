<?php
  $session_start();

  $page = $_GET['page'];

  $page = 1;
  //if($page = $_SESSION['page'];){}



  function get_member_list($page , $member){

    $start = ($page - 1)*5 + 1; 
    $end   = $start*1 + 5;

    count = 0;
    foreach($member as $key => $val){
      if()
    }
    if($param == 1){
      foreach($member['name'] as $key => $val){:      }

    }
  }
?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Member List</title>
  </head>
  <body>

<?php
    foreach($member['name'] as $key => $val){
      echo $key + 1;
      echo $val;
}
?>
<?php
    foreach($member['mail'] as $key => $val){
      echo $key + 1;
      echo $val;
}
?>
  </body>
</html>
