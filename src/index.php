<html>
  <head>
    <title>個人情報入力</title>
  </head>

  <body>
    <form action="./form.php" method="POST">
      <label for="name">氏名</label>
      <input type="text" name="name">
      <br>
      <label for="name">メールアドレス</label>
      <input type="text" name="email">
      <br>
      <label for="gender">性別</label>
      <input type="radio" name="gender" value="男">男
      <input type="radio" name="gender" value="女">女
      <br>
      <input type="submit" value="確認">
    </form>
  </body>
</html>