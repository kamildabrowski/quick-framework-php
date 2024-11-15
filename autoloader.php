<?php

class autoloader {
    const __DIR__ = __DIR__;

}
require('vendor/autoload.php');

$myApp = (new \App\Bootstrap());
$myApp->run();