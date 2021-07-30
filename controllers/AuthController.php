<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{

    public
    function login(Request $request)
    {
        if ($request->isPost()) {
            return "handle get data";
        }
//        $this->layout = "auth";
        $this->setLayout("auth");
        return $this->render('login');
    }

    public function register(Request $request)
    {

        $registerModel = new RegisterModel();
        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());
//
//            if($registerModel->validate() && $registerModel->register()){
//                return "Success";
//            }
        }
//        $registerModel = new RegisterModel();
//        $errors = [];
//
//        if ($request->isPost()) {
//            $name = $request->getBody()["name"];
//            if(!$name){
//                $errors["name"] = "You have to give me name ! ";
//            }
//        }
//        $this->setLayout('auth');
        return $this->render('register', [
//                "errors" => $errors,
        ]);
    }

    private function setLayout(string $layout)
    {
        $this->layout = $layout;
    }
}