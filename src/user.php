<?php session_start();
  $id = $_SESSION['ID'];
  if ($id == '' || $pwd == '') {
    die('ログイン失敗');
  }
?>

<html>
  <head>
    <title>
      プロフィール
    </title>
  </head>

  <body>
    ユーザーID: <?php echo htmlspecialchars($id, ENT_NOQUOTES, 'utf-8'); ?>
  </body>
</html>