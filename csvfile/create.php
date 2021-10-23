<?php
// データが送られているか確認
var_dump($_POST);


// データ受け取り
$name = $_POST["name"];
$email = $_POST["email"];
$favoriteFood = $_POST["favoriteFood"];
// スペース区切りで最後に改行
$write_data = "{$name} {$email} {$favoriteFood}\n";
// ファイルを開く 引数はa
$file = fopen('data/data.csv', 'a');
// ファイルをロック
flock($file, LOCK_EX);
// データに書き込み，
fwrite($file, $write_data);
// ロック解除
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);
// 入力画面に移動
header("Location:index.php");

//参考：主な引数􏰀種類
// - r：読み込みのみで開く
// - r+ ：読み込み / 書き込み用に開く
// - w：書き込みで開く & 内容を削除→ファイルがなけれ􏰂作成
// - w+：読み込み / 書き込みで開く & 内容を削除→ファイルがなけれ􏰂作成
// - a：追加書き込み􏰀みで開く→ファイルがなければ作成
// - a+：読み込み/追加書き込みで開く→ファイルがなけれ􏰂作成