<?php
namespace AHT;
use AHT\router;
use AHT\request;
class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        
        Router::parse($this->request->url, $this->request);
        
        $controller = $this->loadController();
        // $controller->method(param, param1,...)
        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        $file = "AHT\\Controllers\\" . $name;
        
       // require($file);
        $controller = new $file();
        return $controller;
    }

}
?>