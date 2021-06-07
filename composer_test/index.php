<?php

// autoload.phpを読み込み
require_once("vendor/autoload.php");

use App\Controllers\TestController;
use Carbon\Carbon;

$app = new TestController();

$app->run();
echo "<br>";

echo Carbon::now();



?>