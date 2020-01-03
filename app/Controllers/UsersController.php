<?php


namespace App\Controllers;
use SON\Controller;
use App\Models\Users;
use SON\Resolver;
use SON\Router;

class UsersController extends Controller
{


    public function __construct(Users $model,Router $rotas){

        $this->model = $model;
    }

    public function index():string
    {
        return "Método:".__METHOD__."<br>Classe: ".__CLASS__;

    }
    public function show()
    {
        $users =  $this->model->get();
        $this->render($users);
    }
}