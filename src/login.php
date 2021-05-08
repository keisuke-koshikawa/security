<?php
  session_start();
  $id = @$_POST['ID'];
  $pwd = @$_POST['PWD'];

  if ($id == '' || $pwd == '') {
    die('ログイン失敗');
  }
  $_SESSION['ID'] = $id;
?>

<html>
  <head>
    <title>ログイン</title>
  </head>

  <body>
    <p>ログインに成功しました。</p>
    <a href="./user.php"></a>
  </body>
</html>