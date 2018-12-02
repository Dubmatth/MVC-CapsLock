<?php

/**
 * Class Main
 */
class Main
{

    private $url;
    private $controllerName = 'Index';
    private $methodName = 'home';
    private $controllerPath = 'app/controller/';
    private $controller;

    public function __construct()
    {
        $this->getUrl();
        $this->getController();
        $this->getMethod();
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $this->url = explode('/', rtrim(filter_var($_GET['url'], FILTER_SANITIZE_URL), '/'));
        }
    }

    public function getController()
    {
        if (!isset($this->url[0])) {
            require $this->controllerPath . $this->controllerName . '.php';
            $this->controller = new $this->controllerName();
        } else {
            $this->controllerName = $this->url[0];
            $fileName = $this->controllerPath . $this->controllerName . '.php';
            if (file_exists($fileName)) {
                require $fileName;
                if (class_exists($this->controllerName)) {
                    $this->controller = new $this->controllerName();
                }
            }
        }
    }

    public function getMethod()
    {
        if (isset($this->url[2])) {
            $this->methodName = $this->url[1];
            if (method_exists($this->controller, $this->methodName)) {
                $this->controller->{$this->methodName}($this->url[2]);
            } else {
                header('location: ' . BASE_URL . 'Index');
            }
        } else {
            if (isset($this->url[1])) {
                $this->methodName = $this->url[1];
                if (method_exists($this->controller, $this->methodName)) {
                    $this->controller->{$this->methodName}();
                } else {
                    header('location: ' . BASE_URL . 'Index');
                }
            } else {
                if (method_exists($this->controller, $this->methodName)) {
                    $this->controller->{$this->methodName}();
                } else {
                    header('location: ' . BASE_URL . 'Index');
                }
            }
        }
    }
}