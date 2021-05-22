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



// 連想配列１
$array_member = [
  "name" => "本田",
  "height" => 170,
  "hobby" => "サッカー"
];


// 連想配列２
$array_member_2 = [
  "本田" => [
    "height" => 170,
    "hobby" => "サッカー"
  ],
  "香川" => [
    "height" => 165,
    "hobby" => "サッカー"
  ],
];

echo $array_member_2["本田"]["height"];
echo "<pre>";
var_dump($array_member_2);
echo "<pre>";


// 連想配列３
$array_member_3 = [
  "1組" => [
    "本田" => [
      "height" => 170,
      "hobby" => "サッカー"
    ],
    "香川" => [
      "height" => 165,
      "hobby" => "サッカー"
    ]
  ],
  "2組" => [
    "長友" => [
      "height" => 166,
      "hobby" => "サッカー"
    ],
    "乾" => [
      "height" => 150,
      "hobby" => "サッカー"
    ]
  ],
];

echo $array_member_3["1組"]["本田"]["height"];
echo "<pre>";
var_dump($array_member_3);
echo "<pre>";


$test1 = 10;
$test2 = 20;
$test3 = $test1 * $test2;

echo $test3;

$height = "";

if ($height === 180) {
  echo "身長は${height}です";
} else if($height === 175){
  echo "aaaaa";
  echo "<br>";
} else {
  echo "身長が違います";
  echo "<br>";
}


if (!empty($height)){
  echo "データは空です";
}


$members = [
  "name" => "本田",
  "height" => 170,
  "hobby" => "サッカー"
];

// バリューのみ表示
foreach ($members as $member) {
  echo "${member}です";
  echo "<br>";
}

// キーとバリューのみ表示
foreach ($members as $key => $value) {
  echo "${key}は${value}です";
  echo "<br>";
}


$members2 = [
  "本田" => [
    "height" => 170,
    "hobby" => "サッカー"
  ],
  "香川" => [
    "height" => 165,
    "hobby" => "サッカー"
  ],
];

// foreachの入れ子文
foreach ($members2 as $members1) {
  foreach ($members1 as $key => $value) {
    echo "${key}は${value}です";
    echo "<br>";
  }
}

// for文は繰り返す数が決まっている
// while文は繰り返す数が決まっていない

for ($i = 0; $i <= 10; $i++) {
  if ($i > 5){
    break;
  }
  echo $i;
  echo "<br>";
}

$j = 0;
while($j < 5){
  echo $j;
  echo "<br>";
  $j++;
  
}

//  switch文の書き方
// switch(){
//   case 0:
//     break;
//   case 1:
//     break;
//   case 2:
//     break;
//   default:
//     break;
// }


// 関数
function test(){
  echo "テスト";
}
test();

function getComment($int1, $int2){
  return $int1 * $int2;
}

echo getComment(10, 5);

$numbers = [1, 2, 3];

// 配列関数
array_push($numbers, 4);

echo "<pre>";
var_dump($numbers);
echo "<pre>";



?>


</body>
