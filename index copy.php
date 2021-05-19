<?php 
ini_set('display_errors', "On");
// 型を調べることが可能な関数
// var_dump($test_3);

// $array_1 = ["こんンチは","さようなら",3];

// $array_2 = [
//   ["赤", "青", "黄"] ,
//   ["緑", "紫", "黒"]
// ];

// $array_member = [
//   "name" => "本田",
//   "height" => 170,
//   "hobby" => "サッカー"
// ];

// $array_member_2 = [
//   "1組" => [
//     "本田" => [
//       "height" => 170,
//       "hobby" => "サッカー",
  
//     ],
//     "香川" => [
//       "height" => 165,
//       "hobby" => "サッカー",
//     ]
//   ],
//   "2組" => [
//     "長友" => [
//       "height" => 160,
//       "hobby" => "サッカー",
  
//     ],
//     "乾" => [
//       "height" => 168,
//       "hobby" => "サッカー",
//     ]
//   ]
// ];

// $test_1 = 7;
// $test_2 = 3;
// $test_3 = $test_1 % $test_2;

// echo "<pre>";
// var_dump($array_member_2);
// echo "<pre>";

// echo $array_member_2["2組"]["長友"]["height"];

// echo $test_3;

// $height = 10;

// == 一致
// === 型も一致

// if ($height === 90) {
//   echo "身長は{$height}cmです";
// } else {
//   echo "身長は{$height}ではありません";
// }

// $signal = "yellow";

// if ($signal === "red") {
//   echo "とまれ";
// } elseif ($signal === "yellow") {
//   echo "一旦停止";
// } else {
//   echo "すすむ";
// }

// if ($height !== 90){
//   echo "身長は90cmではありません";
// }

// $test = "a";

// if (!empty($test)){
//   echo "変数は空ではありません";
// }

// ANDとOR

// $signal_1 = "red";
// $signal_2 = "blue";

// if ($signal_1 === "red" || $signal_2 === "blue" ){
//   echo "赤と青です";
// }

//  三項演算子
// 条件 ? 真 : 偽
// $math = 80;

// $comment = $math >= 80 ? "合格" : "不合格";

// echo $comment;

// $members = [
//   "本田" => [
//     "height" => 170,
//     "hobby" => "サッカー"
//   ],
//   "香川" => [
//     "height" => 165,
//     "hobby" => "サッカー"
//   ],
// ];

// バリューのみ表示
// foreach($members as $member){
//   echo $member;
// }

// キーとバリューをそれぞれ表示
// foreach($members as $member){
//   foreach($member as $a => $b){
//     echo "{$a}は{$b}です";
//     echo "<br>";
//   }
// }

// for($i = 0; $i < 10; $i++){
//   if ($i === 3){
//     continue;
//   }
//   echo $i;
//   echo "<br>";
// }

// $j = 0;
// while($j < 5){
//   echo $j;
//   $j++;
//   echo "<br>";
// }

// $data = 4;

// switch($data){
//   case 1:
//     echo "1です";
//     break;
//   case 2:
//     echo "2です";
//     break;
//   case 3:
//     echo "3です";
//     break;
//   default:
//     echo "それ以外";
// }


// function test(){
//   echo "test";
// }

// test("aaa");


// $comment = "コメントだよ";

// function getComment($string){
//   echo $string;
// }
// getComment($comment);


// function getNumberOfComment(){
//   return 5;
// }

// echo getNumberOfComment();

// $num1 = 100;
// $num2 = 50;

// function sumPrice($int1, $int2){
//   $int3 = $int1 + $int2;
//   return $int3;
// }

// echo sumPrice($num1, $num2)


// $text = "あいうえお";

// echo strlen($text);

// mb マルチバイトの略
// echo mb_strlen($text);

// $str = "文字列を、置換します。";

// echo str_replace("文字列", "もじれつ", $str);

// echo "<pre>";
// var_dump(explode("、", $str));
// echo "<pre>";

// // 正規表現
// echo preg_match("/文字列/", $str);

// // 指定文字列から文字列を取得する
// echo mb_substr("あいう", 1);


// 配列に配列を追加する
// $array = ["りんご", "みかん"];

// array_push($array, "ぶどう");

// echo var_dump($array);

// $postalCode = "123-4567";

// function checkPostalCode($str){
//   $replaced = str_replace("-", "", $str);
//   $length = strlen($replaced);

//   if ($length === 7){
//     return true;
//   }
//   return false;
// }

// var_dump(checkPostalCode($postalCode));

// $globalVariable = "グローバル変数です";

// function checkScope(){
//   $localVariable = "ローカル変数です";
//   echo $localVariable;
// }

// echo $globalVariable;

// checkScope();

require __DIR__ . "/common/common.php";

echo $commonVariable;

commonTest();

echo "<br>";



?>
