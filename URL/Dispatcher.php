<?php
namespace URL;

use URL\Request;
use URL\Router;

class Dispatcher
{
    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        
        Router::parse($this->request->url, $this->request);
        
        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        // $name = $this->request->controller . "Controller";
        // $file = ROOT . 'Controllers/' . $name . '.php'; //E:/xampp/htdocs/mvc/
        // echo $file;
        // require($file);
        // $controller = new $name();
        // return $controller;

        $name = "Controllers\\" . $this->request->controller . "Controller";
        $controller = new $name();
        return $controller;
    }
}
