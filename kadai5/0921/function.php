<?php

function get_users(int $page) : array
{
  //1: 1-5   2:6-10 3:11-15
  //ページスタート
  $start = ($page - 1)*5 +1 ;
  $end =  $page * 5;
  $param = get_all_users();


  $count = 0;
  foreach ($param as $key => $val) {
     if ($key >= $start and $count < 5) {
        $count++; 
        $ret[$key]['name'] = $val['name'];
        $ret[$key]['email'] = $val['email'];
     }  
  }
  return $ret;
}

function get_all_users(){

  $ret[1]['name'] = 'name1';
  $ret[1]['email'] = 'name1@gmail.com';
  $ret[2]['name'] = 'name1';
  $ret[2]['email'] = 'name1@gmail.com';
  $ret[3]['name'] = 'name1';
  $ret[3]['email'] = 'name1@gmail.com';
  $ret[4]['name'] = 'name1';
  $ret[4]['email'] = 'name1@gmail.com';
  $ret[5]['name'] = 'name1';
  $ret[5]['email'] = 'name1@gmail.com';
  $ret[6]['name'] = 'name1';
  $ret[6]['email'] = 'name1@gmail.com';
  $ret[7]['name'] = 'name1';
  $ret[7]['email'] = 'name1@gmail.com';
  $ret[8]['name'] = 'name1';
  $ret[8]['email'] = 'name1@gmail.com';
  $ret[9]['name'] = 'name1';
  $ret[9]['email'] = 'name1@gmail.com';
  $ret[10]['name'] = 'name1';
  $ret[10]['email'] = 'name1@gmail.com';
  $ret[11]['name'] = 'name1';
  $ret[11]['email'] = 'name1@gmail.com';
  $ret[12]['name'] = 'name1';
  $ret[12]['email'] = 'name1@gmail.com';
  $ret[13]['name'] = 'name1';
  $ret[14]['email'] = 'name1@gmail.com';
  $ret[14]['name'] = 'name1';
  $ret[15]['email'] = 'name1@gmail.com';
  $ret[16]['name'] = 'name1';
  $ret[17]['email'] = 'name1@gmail.com';
  $ret[17]['name'] = 'name1';
  $ret[18]['email'] = 'name1@gmail.com';
  $ret[18]['name'] = 'name1';
  $ret[19]['email'] = 'name1@gmail.com';
  $ret[19]['name'] = 'name1';
  $ret[20]['email'] = 'name1@gmail.com';
  $ret[20]['name'] = 'name1';

  return $ret;

}
