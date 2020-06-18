<?php
namespace Lib\Controller;

use Lib\View\ViewModel;

class FrontController
{
   public function run()
   {
       
       $rota = $_GET['rota'] ?? 'index/index';
              
       $parseRota = explode('/', $rota);  
       $controller = $parseRota[0];
       $action = $parseRota[1];   
       $caminhoWiew = "$controller/$action";
       $controller = 'Controller\\' .  ucfirst($controller);
       $objController = new $controller();


       if (! method_exists($objController, $action)) {
           throw new \Exception('Rota invalida');
           return;
           exit();
       }

       $dados = $objController->$action();
       
       ViewModel::render($caminhoWiew, $dados);
   }
}