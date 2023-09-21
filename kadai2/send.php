<?php
  $name = $_POST['name'];

  $url = switch_template($name);
  echo $url;

  //-----postしたnameの値を引数にして渡すと異なるHTMLページを表示する関数-----
  function switch_template($param) {
    $url = 'https://www.sovagroup.jp/';

    $html['top']     = $url;
    $html['about']   = $url . 'about';
    $html['service'] = $url . 'service';
    $html['news']    = $url . 'mews';
    $html['member']  = $url . 'member';
    $html['contact'] = $url . 'contact';
    $html['careers'] = $url . 'careers';
      
    foreach($html as $key => $val) {
      if($key == $param) {
        header('Location: '.$val);
      }
    }
  }
  //--------------------
?>
