<?php

class SoVa {

  private $name = "";

  public function __construct() {
    $this->name = "SoVa";
  }

  public function get_company_name() {
    return $this->name;
  }
}

$sova = new SoVa;
$res = $sova->get_company_name();
echo $res;

?>
