<?php

require("db_connection.php");

// ユーザー入力なし
$sql = "select * from contacts where id = 4";
$stmt = $pdo->query($sql); //sqlを実行する
$result = $stmt->fetchAll();


// ユーザー入力あり
// prepare bind execute 
$sql = "select * from contacts where id = :id"; //名前付きプレースホルダー
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindValue("id", 2, PDO::PARAM_INT); //紐付け
$stmt->execute(); //実行

$result = $stmt->fetchAll();



// トランザクション まとまって処理 beginTransaction, commit, rollback
// 例) 銀行 残高を確認->Aさんから引き落とし->Bさんに振り込み

$pdo->beginTransaction();
try{
  $stmt = $pdo->prepare($sql); //プリペアードステートメント
  $stmt->bindValue("id", 2, PDO::PARAM_INT); //紐付け
  $stmt->execute(); //実行
  $result = $stmt->fetchAll();

  $pdo->commit();
}catch (PDOException $e) {
  $pdo->rollback();
}

echo "<pre>";
var_dump($result);
echo "<pre>";


?>