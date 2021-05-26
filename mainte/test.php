<?php
// パスワードを記録した場所
// echo __FILE__;
// echo "<br>";

// /Applications/MAMP/htdocs/php_test/mainte/test.php
// echo(password_hash("password", PASSWORD_BCRYPT));


$file = ".contact.dat";

// ファイルを丸ごと読み込み
$contents = file_get_contents($file);

// echo $contents;

// $add = "テストです。" . PHP_EOL;

// ファイルに書き込み（上書き）
// file_put_contents($file, "$add", FILE_APPEND);

// 配列 file, 区切る, 
$allData = file($file);

foreach ($allData as $lineData) {
  $lines = explode(",", $lineData);
  echo $lines[0] . "<br>";
  echo $lines[1] . "<br>";
  echo $lines[2] . "<br>";
}


?>