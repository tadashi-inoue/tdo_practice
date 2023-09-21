<?php
  $url = $_POST['url'];

  $homepage = file_get_contents($url);
  $ret      = explode('<title>' , $homepage);
  $ret2     = $ret[1];
  $ret3     = explode('</title>' , $ret2);
  $ret4     = $ret3[0];

  d($ret4);

  //--------------------
  function d($param) {
  echo "<pre>";
  var_dump($param);
  exit;
  }
  //--------------------
?>
