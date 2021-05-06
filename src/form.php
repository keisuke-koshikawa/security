<?php $name = @$_POST['name']; $email = @$_POST['email']; $gender = @$_POST['gender']; ?>

<html>
  <head>
    <title>確認</title>
  </head>

  <body>
    <form action="./result.php" method="POST">
      氏名: <?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?>
      <br>
      メールアドレス: <?php echo htmlspecialchars($email, ENT_NOQUOTES, 'UTF-8'); ?>
      <br>
      性別: <?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?>
      <br>
      <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?>">
      <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_NOQUOTES, 'UTF-8'); ?>">
      <input type="hidden" name="gender" value="<?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?>">
      <br>
      <input type="submit" value="登録">
    </form>
  </body>
</html>