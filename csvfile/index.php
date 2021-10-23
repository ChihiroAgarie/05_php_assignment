<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>csvファイルでアンケート集計（入力）</title>
</head>

<body>
  <form action="create.php" method="post">
    <fieldset>
      <legend>csvファイルでアンケート集計（入力）</legend>
      <a href="read.php">一覧画面</a>
      <div>
        名前: <input type="text" name="name">
      </div>
      <div>
        email: <input type="email" name="email">
      </div>
      <div>
        好きな食べ物: <input type="text" name="favoriteFood">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>