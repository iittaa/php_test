<?php

use Product as GlobalProduct;

class Product{
  // アクセス修飾子
  // private(クラス内) protect(継承したクラス可能) public(アクセス可能)

  private $product = [];

  // 初回
  function __construct ($product) {
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

$instance->getProduct();
echo "<br>";

$instance->addProduct("テスト2");
echo "<br>";

$instance->getProduct();
echo "<br>";

// 静的(static) インスタンスを作成しなくても使える？
Product::getStaticProduct("静的");
echo "<br>";



?>