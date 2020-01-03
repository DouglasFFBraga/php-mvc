<?php


namespace SON;


class Controller
{

  protected $model;

  protected function render(array $data = [],string $view = null){

       if(is_null($view)){
           $view = $this->controllerName() . "/" . debug_backtrace()[1]['function'];
       }

       extract($data);
       require __DIR__ ."/templates/".$view.".tpl.php";
   }

   private function controllerName(){

       $class = get_class($this); // App\Controllers\UsersController
       $class = explode("\\",$class);
       $class = array_pop($class);
       $class = preg_replace("/Controller$/","",$class);

       return strtolower($class);

   }

    public function handler():string
    {
        return self::class;
    }
}