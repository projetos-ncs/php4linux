<?php

namespace Lib\View;
class ViewModel {
    public static function render($caminhoView, $dados = null)
    {

       $file = __DIR__ . '/../../../view/layout/layout.phtml';
        require  $file;
    }
}
