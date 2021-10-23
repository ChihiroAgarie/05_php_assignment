<?php
$str = ''; // 出力用の空の文字列
$file = fopen('data/data.csv', 'r'); // ファイルを開く(読み取り専用) 
flock($file, LOCK_EX); // ファイルをロック
if ($file) {
  while ($line = fgets($file)) { // fgets()で1行ずつ取得→$lineに格納
    $str .= "<tr><td>{$line}</td></tr>"; // 取得したデータを$strに入れる 
  }
}
flock($file, LOCK_UN); // ロック解除 
fclose($file);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>csvファイルでアンケート集計（出力）</title>
</head>

<body>
  <fieldset>
    <legend>csvファイルでアンケート集計（出力）</legend>
    <a href="index.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>data</th>
        </tr>
      </thead>
      <tbody>
        <?= $str ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>