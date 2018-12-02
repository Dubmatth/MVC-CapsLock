<?php
require 'library/tools.php';
require 'app/config/config.php';
spl_autoload_register(function($class){
    require 'library/'.$class.'.php';
});
$main = new Main();