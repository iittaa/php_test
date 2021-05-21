<!DOCTYPE html>
<head></head>
<body>
こちらはHTMLです
<?php
echo "こちらはPHPです";
echo "<br>";
// 変数指定
$test = "こんにちは";

// 定数指定（一般的には全て大文字）
const MAX = "テスト";
echo MAX;

echo "<br>";
echo "こちらは${test}です";

var_dump($test);

// 配列一行
$array = ["あああ", 2, 3];

$array_2 = [
  ["赤", "青", "黄色"],
  ["紫", "緑", "黒"]
];

echo "<br>";
echo $array[0];

echo "<br>";
echo $array_2[0][1];

echo "<br>";
echo "<pre>";
var_dump($array);
echo "<pre>";

echo "<pre>";
var_dump($array_2);
echo "<pre>";







?>


</body>
