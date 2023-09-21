<?php
$error_lastname =$_GET['error_lastname'];
  $error_firstname =$_GET['error_firstname'] ;
  $error_email =$_GET['error_email'];
  $error_tel =$_GET['error_tel'];
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div id="wrapper">
      <section id="form">
        <h3>入力フォーム</h3>
        <form action="send.php" method="post">
          <div class="form_content">
            <div class="form_title_group">
              <p class="form_title">氏名</p>
              <strong>必須</strong>
            </div>
            <div class="form_content_name">
              <div>
                <p><input class="textarea_halfsize , mr16px" type="text" name="lastname" placeholder="田中"></p>
                <?php if($error_lastname == '1'): ?>
                  <p style="color:#F53246; font-size:14px; font-weight:bold; margin-top:8px;">※入力は必須です</p>
                <?php endif; ?>
              </div>
              <div>
                <p><input class="textarea_halfsize" type="text" name="firstname" placeholder="太朗"></p>
                <?php if($error_firstname == '1'): ?>
                  <p style="color:#F53246; font-size:14px; font-weight:bold; margin-top:8px;">※入力は必須です</p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="form_content">
            <div class="form_title_group">
              <p class="form_title">メールアドレス</p>
              <strong>必須</strong>
            </div>
            <p><input class="textarea" type="text" name="email" placeholder="example@mail.com"></p>
            <?php if($error_email == '1'): ?>
              <p style="color:#F53246; font-size:14px; font-weight:bold; margin-top:8px;">※入力は必須です</p>
            <?php endif; ?>
          </div>
          <div class="form_content">
            <div class="form_title_group">
              <p class="form_title">電話番号</p>
              <strong>必須</strong>
            </div>
            <p><input class="textarea" type="tel" name="tel" placeholder="090-1234-5678"></p>
            <?php if($error_tel == '1'): ?>
              <p style="color:#F53246; font-size:14px; font-weight:bold; margin-top:8px;">※入力は必須です</p>
            <?php endif; ?>
          </div>
          <div class="form_btn">
            <input class="btn" type="submit" value="送信する">
          </div>
        </form>
      </section>
    </div>
  </body>
</html>
