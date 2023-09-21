<?php

function validation($data) {
  //空の配列を生成
  $error = [];
//名前が未入力、または15文字以上の場合、$errorの配列にエラー分を追加している。
  if (empty($data['your_name']) || 15 < mb_strlen($data['your_name'])) {
    $error[] = '氏名は、15字以内で入力してください。';
  }
//!filter_varで指定したフィルタでデータをフィルタリングしています。今回は、フィルタにFILTER_VALIDATE_EMAILを指定しているのでメールアドレスかどうかフィルタリングしています。
  if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $error[] = 'メールアドレスは、正しい形式で入力してください。';
  }
//URLは空でもOKなため、まず!emptyで空でなかったら処理をするようにする。その処理の中に!filter_varにFILTER_VALIDATE_URLのフィルタを設定して、正しいURLの形式かフィルタリングしている。
  if (!empty($data['url'])) {
    if (!filter_var($data['url'], FILTER_VALIDATE_URL)) {
      $error[] = 'URLは、正しい形式で入力してください。';
    } 
  }

//emptyだと0でも通ってしまうのでissetを使う。今回の場合は、セットされていなければ処理。
  if (!isset($data['gender'])) {
    $error[] = '性別は必ず入力してください。';
  }
//年齢の項目が未入力、またはvalueで送られてきた値が5以上の場合、エラー文を追加している。
  if (empty($data['age']) || 5 < $data['age']) {
    $error[] = '年齢は必ず入力してください。';
  }
//お問い合わせ内容が未入力または、300文字以上の場合、エラー文を追加している。
  if (empty($data['contact']) || 300 < mb_strlen($data['contact'])) {
    $error[] = 'お問い合わせ内容は、300字以内で入力してください。';
  }
//注意事項の項目をチェックするとvalueで'1'が送られてくる。つまり'1'以外が送られてきた場合エラー文を追加する。
  if ($data['caution'] !== '1') {
    $error[] = '注意事項をご確認ください。';
  }

  return $error;

}

?>
