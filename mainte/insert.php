<?php



function insertContact ($request) {
  // DB接続 PDO
  require("db_connection.php");


  // 入力 DB保存 prepare bind execute
  $params = [
    "id" => null,
    "your_name" => $request["your_name"],
    "email" => $request["email"],
    "url" => $request["url"],
    "gender" => $request["gender"],
    "age" => $request["age"],
    "contact" => $request["contact"],

  ];

  $count = 0;
  $columns = "";
  $values = "";

  foreach (array_keys($params) as $key) {
    // countが0より大きかったらコンマdえ区切りをつける
    if ($count++ > 0) {
      $columns .= ",";
      $values .= ",";
    }
    $columns .= $key;
    $values .= ":$key";
  }

  $sql = "insert into contacts ($columns)values($values)";

  $stmt = $pdo->prepare($sql); //ステートメント $stmtに命令文を格納
  $stmt->execute($params); //SQL実行
}


?>