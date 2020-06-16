<?php 



function carregarClasse($classe) {
    
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
            
            $caminhoArquivo = __DIR__ . "\src\\$file.php";          
   
            
                      
            if(file_exists($caminhoArquivo)){
                 
                require_once $caminhoArquivo;
            }
           
}

spl_autoload_register('carregarClasse');