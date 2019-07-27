<?php
require './vendor/autoload.php';
use Zhang\SjunitLaravel\Test;

$su = new Test();
$res = $su->demo();
var_dump($res);