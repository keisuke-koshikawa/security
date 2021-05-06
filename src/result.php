<?php $name = @$_POST['name']; $email = @$_POST['email']; $gender = @$_POST['gender']; ?>

<html>
  <head>
    <title>登録完了</title>
  </head>

  <body>
    <form action="./" method="POST">
      氏名: <?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?>
      <br>
      メールアドレス: <?php echo htmlspecialchars($email, ENT_NOQUOTES, 'UTF-8'); ?>
      <br>
      性別: <?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?>
      <br>
      登録されました。
    </form>
  </body>
</html>