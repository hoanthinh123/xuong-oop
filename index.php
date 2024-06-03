<?php

use Asus\Xuong\Commons\Helper;

session_start();

require_once './vendor/autoload.php';
require_once __DIR__ . '/routes/index.php';

$array = [
    new DOMComment(),

];
Helper::debug($array);
