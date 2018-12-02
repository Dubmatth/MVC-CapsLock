<?php
/* require 'app/view/header.php';
require 'library/Database.php';
require 'library/Load.php';
require 'library/MainController.php';
require 'library/MainModel.php';

$main = new MainController();


if (isset($_GET['url'])) {
    $url = explode('/', rtrim($_GET['url'], '/'));
    require_once 'app/controller/' . $url[0] . '.php';
    $controller = new $url[0]();
    if (isset($url[2])) {
        $method = $url[1];
        $controller->$method($url[2]);
} elseif(isset($url[1])) {
        $method = $url[1];
        $controller->$method();
    }
} else {
    require 'app/controller/Index.php';
    $index = new Index();
    $index->home();
}

require 'app/view/footer.php'; */

require 'library/tools.php';
require 'app/config/config.php';
spl_autoload_register(function($class){
    require 'library/'.$class.'.php';
});
$main = new Main();