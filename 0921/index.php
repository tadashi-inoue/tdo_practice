<?php
//classは設計図。classはSoVaの中にある変数と関数を定義できる。
class SoVa {
  private $name = "";
  private $address = "";
  private $service = "";
  private $staff = "";
  private $staff_info = array();
  private $staff_name = "";
  
  //classは関数としての２つのものを持つ
  //__constructとそうではないもの
  public function __construct(){
    $this->name = "sova"; 
    $this->address = "nihonbashi honcho 3-9-7";
    $this->service = "accountant service for DX age";
    $this->staff = "いで";
    $this->staff_info = $this->get_staff_info($this->staff_name);
    //↑横断的に使える変数をインスタンス変数

  }
  //↑__constructは必ずあるので個数にはカウントしない

  public function get_intro(){
    return $this->name."は". $this->address."にある".$this->service."を提供している会社です。代表的な人は".$this->staff."です。";
  }

  public function get_company_name(){
    return $this->name;
  }
  //$thisとは、このclassの中のという意味

  public function get_staff_info($param){
    if($param == 'ide'){
      $this->staff_info['name'] = 'ide';
      $this->staff_info['occupation'] = 'web creater';
    } else {
      $this->staff_info['name'] = 'nanashi';
      $this->staff_info['occupation'] = 'others';
    }
    return $this->staff_info;
  }

  public function get_staff_name(){
    return $this->staff;
  }

  public function get_address(){
    return $this->address;
  }

  public function get_servide(){
    return $this->service;
  }
}

//↓設計図から組み立て、実体のあるものにする。その時に実行されるのは__construct関数だけ
//↓newすることの正確な言葉は「インスタンス化する」
$sova = new SoVa('ide');
$res = $sova->get_staff_info();
$re1 = $res['name'];
$re2 = $res['occupation'];
echo $res1;
echo $res2;


//オブジェクト指向とは、変数を関数を跨いで使うことができる

?>
