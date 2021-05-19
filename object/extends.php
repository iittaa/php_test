<?php

// 親クラス
class BaseProduct{
  // 変数 関数
  public function echoProduct(){
    echo "親クラスです";
  }

  // オーバーライド
  public function getProduct(){
    echo "親の関数です";
  }

}

// 子クラス extends 親クラス
class Product extends BaseProduct {

  // 変数
  private $product = [];

  // 関数

  // 初回
  function __construct($product){
    $this->product = $product;
  }

  
  public function getProduct(){
    echo $this->product;
  }

  public function addProduct($item){
    $this->product .= $item;
  }

  public static function getStaticProduct($str){
    echo $str;
  }

  


}

$instance = new Product("テスト");

var_dump($instance);
echo "<br>";

$instance->getProduct();
echo "<br>";

$instance->addProduct("追加分");
echo "<br>";

$instance->getStaticProduct("静的");
echo "<br>";


// 親クラスのメソッド
$instance->echoProduct();


?>