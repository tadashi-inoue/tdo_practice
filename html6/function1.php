<?php

//結果 = 関数(引数);
//ジュース = 自販機(お金);
//↑
//返り値       関数(引数);
//攻撃 = 銃(弾 , 引き金引く);

$name = 'ide';

//var_dump($name);
//↑echoまでやってくれる関数

$oomoji = strtoupper($name);

//strpos

$kekka = strpos($oomoji , 'a');
if($kekka === 0) {
  echo 'あったよ';
} else {
  echo 'ないよ';
}

//phpは1とtrue、0とfalseの見分けがつけられない
//===は、型まで見てくれる

$utm_source = 'https://sovagroup.com?utm_source=fb&utm_campain=1';
$ret = explode('?' , $utm_source);
$ret2 = $ret[1];
$ret3 = explode('&' , $ret[1]);

//echo "<pre>";
//var_dump($ret3);

$res2 = 'yuki/nami/tadao/nishi/sasuke/kakusei_ide/yamamoto/yamaken';
$res3 = explode('/' , $res2);
echo "<pre>";
var_dump($res3);

//echo $ret3[0];

//echo $oomoji;



//------------------------------
//------------------------------
//------------------------------
//自作関数の世界へようこそ
//------------------------------
//------------------------------
//------------------------------

//$name2 = addSan($name , 'だよ');
//echo $name2;

//echo addSan($name);
//↑これでも出力する

//------------------------------
//function addSan($param , $param2 = ''){
//  $ret = $param . 'さん' . $param2;
//  return = $ret;
//}
//------------------------------
//先に定義された関数を先に読み込む
//関数定義空間と、実行環境は全く別の世界、$名は関係ない

//------------------------------
function d($param) {
  echo "<pre>";
  var_dump($param);
  exit;
}
//------------------------------

//------------------------------
function isBlack($param , $target_name){
  if($param == $target_name){
  return 'black';
  }
}
//------------------------------


//------------------------------
function set_color(){
  $color_code =  sprintf("#%06x",rand(0x000000, 0xFFFFFF));
  $ret = 'style="background-color:'.$color_code.'"';
  echo $ret;
}
//------------------------------

//------------------------------
function set_grade(){
  $color_code1 = sprintf("#%06x",rand(0x000000, 0xFFFFFF));
  $color_code2 = sprintf("#%06x",rand(0x000000, 0xFFFFFF));
  $color_code3 = sprintf("#%06x",rand(0x000000, 0xFFFFFF));
  $opacity1 = rand(0 , 33.333);
  $opacity2 = rand(33.333 , 66.666);
  $opacity3 = rand(66.666 , 100);
  $ret = 'style="background: linear-gradient(90deg, '.$color_code1.' '.$opacity1.'%, '.$color_code2.' '.$opacity2.'%, '.$color_code3.' '.$opacity3.'%)"';
  echo $ret;
}
//------------------------------
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>

  <style>
    .black {
    background-color:red;
    color:#FFF;
  }
  </style>
    <body <?php set_grade(); ?>>

<!-- アクセスするたびに背景色が変わる、ランダムに数字を吐き出す関数がある、カラーコードランダムに生成、カラーコードをランダムに生成するコードを生成する、０〜２５５までアクセスするたびにランダムに変更する関数をつくる、文字列そのものを作る、それをstyleのcolorに表示する -->

<?php foreach($res3 as $key => $val): ?>
<?php
//$black_class = '';
//if($val == 'kakusei_ide') {
//  $black_class = 'black';
//}
?>
<h3 class="<?= isBlack($val , 'tadao') ?>"><?= $val; ?></h3>
<?php endforeach; ?>
  </body>
</html>
