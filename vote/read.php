<?php
$str = ''; // 出力用の空の文字列
$file = fopen('data/data.csv', 'r'); // ファイルを開く(読み取り専用) 
flock($file, LOCK_EX); // ファイルをロック
if ($file) {
  while ($line = fgets($file)) { // fgets()で1行ずつ取得→$lineに格納
    $str .= "<tr><td>{$line}</td></tr>"; // 取得したデータを$strに入れる 
    // 該当する文字列の数を検索
    $str1 = "いなとみ 修二";
    $call1 = substr_count($str, $str1);
    $str2 = "おにき 誠";
    $call2 = substr_count($str, $str2);
    $str3 = "しんかい たかし";
    $call3 = substr_count($str, $str3);
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
  <title>VOTE2021</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/read.css">
</head>

<body>
  <header>
    <h1>VOTE</h1>
    <p>2021</p>
  </header>
  <section class="content">
    <p class="thx">投票ありがとうございました！</p>
    <h2>投票結果</h2>
    <div>
      <table class="table">
        <tr>
          <th>いなとみ 修二</th>
          <td id="call1"><?= $call1 ?></td>
        </tr>
        <tr>
          <th>おにき 誠</th>
          <td id="call2"><?= $call2 ?></td>
        </tr>
        <tr>
          <th>しんかい たかし</th>
          <td id="call3"><?= $call3 ?></td>
        </tr>
      </table>
    </div>
    <div class="canvas_wrapper">
      <canvas id="myChart" class="Chart" width="200px" height="200px"></canvas>
    </div>
    <fieldset>
      <legend>投票データ</legend>
      <table class="table">
        <thead>
          <tr>
            <th>ID/候補者名</th>
          </tr>
        </thead>
        <tbody>
          <?= $str ?>
        </tbody>
      </table>
    </fieldset>
    <a href="index.php" class="top">トップに戻る</a>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/1.0.11/jquery.csv.min.js"></script>
  <script src="js/read.js"></script>
</body>

</html>