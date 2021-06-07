<?php

namespace App\Models;

// ファイルの名前に同じにする必要がある
class TestModel{
  private $text = "hello world";

  public function getHello(){
    return $this->text;
  }
  
}
?>