<?php

class SoVa {
  private $name = "";
  private $address = "";
  private $service = "";
  private $staff = "";

  public function __construct(){
    $this->name = "sova";
    $this->address = "日本橋";
    $this->service = "会計事務所SoVa";
    $this->staff = "イデ";
  }

  public function get_company_name(){
    return $this->name;
  }

  public function get_intro(){
    return $this->name. "は". $this->address. "にある". $this->service. "を提供している会社です。代表的な人は". $this->staff. "です。";
  }
}

$sova = new SoVa();
$res = $sova->get_intro();
echo $res;

?>
