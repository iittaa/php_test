<?php

// 抽象クラス メソッドを強制（必ず使う）する役割
abstract class ProductAbstract{
  // 変数 関数
  public function echoProduct(){
    echo "親クラスです";
  }

  // 抽象メソッド
  abstract public function getProduct();

}


// 親クラス 具象クラス
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
class Product extends ProductAbstract {

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