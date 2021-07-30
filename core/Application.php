<?php
/**
 * Class Application
 * @author Siddhesh Bhupendra Kukade <littlelord124@gmail.com>
 * @package app\core
 */

namespace app\core;
class Application
{
    public static $ROOT_DIR;
    public  $router , $response , $request , $controller;
    public static $app;

    /**
     * Application constructor.
     * @param $rootDir :where your applications starts
     * the Application:app will always refer to the latest created object of Application Class
     */
    public function __construct($rootDir)
    {
        self::$app = $this;
        self::$ROOT_DIR = $rootDir;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->controller = new Controller();
    }
    public function run()
    {
       print_r($this->router->resolve());
    }
}