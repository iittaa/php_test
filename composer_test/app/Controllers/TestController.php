<?php

namespace App\Controllers;

// Testmodelクラスを読み込み
use App\Models\TestModel;

class TestController{
  public function run(){
    $model = new TestModel();
    echo $model->getHello();
  }
}



?>