<?php

require "db_connection.php";

// ユーザー入力なし
// $sql = "select * from contacts where id = 2";
// $stmt = $pdo->query($sql); //  sql実行 ステートメント

// $result = $stmt->fetchall();  // sqlの結果を表示する



// ユーザー入力あり prepare, bind, execute sqlインジェクション対策
$sql = "select * from contacts where id = :id"; //名前付きプレースホルダー
// $stmt = $pdo->prepare($sql); //ステートメント
// $stmt->bindValue("id", 2, PDO::PARAM_INT);  //紐付け
// $stmt->execute(); //実行

// $result = $stmt->fetchall();  // sqlの結果を表示する



// トランザクション まとまって処理 beginTransaction, commit, rollback
// 例) 銀行 残高を確認->Aさんから引き落とし->Bさんに振り込み

$pdo->beginTransaction();
try{

  $stmt = $pdo->prepare($sql); //ステートメント
  $stmt->bindValue("id", 2, PDO::PARAM_INT);  //紐付け
  $stmt->execute(); //実行

  $result = $stmt->fetchall();  // sqlの結果を表示する
  
  $pdo->commit();
}catch(PDOException $e){
  $pdo->rollback(); //更新のキャンセル
}
echo "<pre>";
var_dump($result);
echo "<pre>";


?>