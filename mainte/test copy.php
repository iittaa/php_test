<?php

// // パスワードを記録した場所
// echo __FILE__;
// // /Applications/MAMP/htdocs/php_test/mainte/test.php


// echo "<br>";
// // パスワード（暗号化）
// echo(password_hash("password123", PASSWORD_BCRYPT));
// // $2y$10$zPUkVBp/RxPloKod8cLCj.yb0aT6VnRQlAJayLfebAiaCWXK.6AnG


// ファイル丸ごと読み込み
// $fileContents = file_get_contents($contactFile);
// echo $fileContents;

// ファイルに書き込み(上書き)
// file_put_contents($contactFile, "テストです。");

// $addText = "テストです。"."\n" ;

// ファイルに書き込み（追記）
// file_put_contents($contactFile, $addText, FILE_APPEND);

// 配列 file ,区切り

// $allData = file($contactFile);

// foreach($allData as $lineData){
//   $lines = explode(",", $lineData);
  // echo "<pre>";
  // echo var_dump($lines);
  // echo "<pre>";

//   echo $lines[0]."<br>";
//   echo $lines[1]."<br>";
//   echo $lines[2]."<br>";
//   echo $lines[3]."<br>";
// }

$contactFile = ".contact.dat";

$fileContents = file_get_contents($contactFile);
$contents = fopen($contactFile, "a+");

$addText = "一行追記"."\n";

fwrite($contents, $addText);

fclose($contents);


echo $fileContents;





?>