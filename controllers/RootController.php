<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class RootController extends Controller
{
    public function contact()
    {
      return  $this->render('contact');
    }

    public function home()
    {
        $params = ["name"=>"sid", "id"=>1];
       return $this->render('home' , $params);
    }

    public function handleContact(Request  $request)
    {
        $body = $request->getBody();

        return $body;
    }

}