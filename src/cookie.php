<?php session_start(); ?>

<html>
  <head>
    <title>ログインしてください</title>
  </head>

  <body>
    <form action="./login.php" method="POST">
      <label for="ID">ユーザー名</label>
      <input type="text" name="ID">
      <br>
      <label for="password">パスワード</label>
      <input type="password" name="password">
      <br>
      <input type="submit" value="ログイン">
    </form>
  </body>
</html>