<?php


namespace SON;


class Resolver
{
   public function handler(string $class,string $method = NULL){

       $instance = NULL;
       $ref = new \ReflectionClass($class);

       $constructor = $ref->getConstructor();

       if(!$constructor){
           $instance = $ref->newInstance();
       }

       $parameters = $this->paramsResolver($ref,$constructor);
       $instance = $ref->newInstanceArgs($parameters);

       if(!$method){
           return $instance;
       }

   }

   private function paramsResolver($ref,$method){


       $parameters = [];

       foreach($method->getParameters() as $param){

           if($param->getClass()->name){
               $parameters[] = $this->handler($param->getClass()->name);
           }

       }

       return $parameters;
   }
}