<?php
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $info = $_POST;

  $redirectUrl = 'http://127.0.0.1:8082/index.php?';

  if (empty($lastname)) {
    $redirectUrl = $redirectUrl . '&error_lastname=1';
  }

  if (empty($firstname)) {
    $redirectUrl = $redirectUrl . '&error_firstname=1';
  }

  if (empty($email)) {
    $redirectUrl = $redirectUrl . '&error_email=1';
  }

  if (empty($tel)) {
    $redirectUrl = $redirectUrl . '&error_tel=1';
  }

  if (empty($lastname) || empty($firstname) || empty($email) || empty($tel)) {
    header('Location:'. $redirectUrl);
    exit;
  }

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
          <div class="form_content">
            <div class="form_title_group">
              <p class="form_title">氏名</p>
              <strong>必須</strong>
            </div>
            <div class="form_content_name">
              <div>
                <p><?php echo $info['lastname']; ?></p>
              </div>
              <div>
                <p><?php echo $info['firstname']; ?></p>
              </div>
            </div>
          </div>
          <div class="form_content">
            <div class="form_title_group">
              <p class="form_title">メールアドレス</p>
              <strong>必須</strong>
            </div>
            <p><?php echo $info['email']; ?></p>
          </div>
          <div class="form_content">
            <div class="form_title_group">
              <p class="form_title">電話番号</p>
              <strong>必須</strong>
            </div>
            <p><?php echo $info['tel']; ?></p>
          </div>
        </form>
      </section>
    </div>
  </body>
</html>
