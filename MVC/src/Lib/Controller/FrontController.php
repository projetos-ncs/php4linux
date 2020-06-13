<?php
namespace Lib\Controller;

class FrontContoller
{
   public function run()
   {
       $rota = $_GET['rota'] ?? 'index/index';
       $parseRota = explode('/', $rota);
       $controller = $parseRota[0];
       $action = $parseRota[1];
       $caminhoWiew = "$controller/$action";
       $controller = ucfirst($controller);

       if (! method_exists($objController, $action)) {
           throw new \Exception('Rota inválida');
           return;
           exit();
       }

       $dados = $controller/$action;
       var_dump($dados);
   }
}