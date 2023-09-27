<?php

function get_member_list(int $page) : array {
  $start  = ($page - 1) * 5 + 1; 
  $end    = $page * 5;
  $param = get_all_members();

  $count = 0;
  foreach ($param as $key => $val) {
    if ($key >= $start and $count < 5) {
      $count++;
      $ret[$key]['name'] = $val['name'];
      $ret[$key]['mail'] = $val['mail'];
    }
  }
  return $ret;
}

function get_all_members() {
  $member[1]['name'] = 'aaa';  
  $member[1]['mail'] = 'aaa@mail.com';
  $member[2]['name'] = 'bbb';  
  $member[2]['mail'] = 'bbb@mail.com';
  $member[3]['name'] = 'ccc';  
  $member[3]['mail'] = 'ccc@mail.com';
  $member[4]['name'] = 'ddd';  
  $member[4]['mail'] = 'ddd@mail.com';
  $member[5]['name'] = 'eee';  
  $member[5]['mail'] = 'eee@mail.com';
  $member[6]['name'] = 'fff';  
  $member[6]['mail'] = 'fff@mail.com';
  $member[7]['name'] = 'ggg';  
  $member[7]['mail'] = 'ggg@mail.com';
  $member[8]['name'] = 'hhh';  
  $member[8]['mail'] = 'hhh@mail.com';
  $member[9]['name'] = 'iii';  
  $member[9]['mail'] = 'iii@mail.com';
  $member[10]['name'] = 'jjj';  
  $member[10]['mail'] = 'jjj@mail.com';
  $member[11]['name'] = 'kkk';  
  $member[11]['mail'] = 'kkk@mail.com';
  $member[12]['name'] = 'lll';  
  $member[12]['mail'] = 'lll@mail.com';
  $member[13]['name'] = 'mmm';  
  $member[13]['mail'] = 'mmm@mail.com';
  $member[14]['name'] = 'nnn';  
  $member[14]['mail'] = 'nnn@mail.com';
  $member[15]['name'] = 'ooo';  
  $member[15]['mail'] = 'ooo@mail.com';
  $member[16]['name'] = 'ppp';  
  $member[16]['mail'] = 'ppp@mail.com';
  $member[17]['name'] = 'qqq';  
  $member[17]['mail'] = 'qqq@mail.com';
  $member[18]['name'] = 'rrr';  
  $member[18]['mail'] = 'rrr@mail.com';
  $member[19]['name'] = 'sss';  
  $member[19]['mail'] = 'sss@mail.com';
  $member[20]['name'] = 'uuu';  
  $member[20]['mail'] = 'uuu@mail.com';

  return $member;
}

?>
