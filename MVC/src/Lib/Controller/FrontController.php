<?php
namespace Lib\Controller;

use Lib\View\ViewModel;

class FrontController
{
   public function run()
   {
       $rota = $_GET['rota'] ?? "index" . DIRECTORY_SEPARATOR. "index";
         
       $parseRota = explode('/', $rota);  
       $controller = $parseRota[0];
       $action = $parseRota[1];   
       $caminhoWiew = "$controller".DIRECTORY_SEPARATOR.$action;

       $controller = 'Controller'. DIRECTORY_SEPARATOR. ucfirst($controller);
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