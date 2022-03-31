<?php
spl_autoload_register(function ($classe){
    $prefixo = "App\\";
    $diretorio = __DIR__.'/src/';

    if(strncmp($prefixo,$classe,strlen($prefixo))!== 0){ //Faz a comparação entre as strings, com isso vamos realizar uma comparação para ver se a classe que estamos carregando tem o prefixo App\. Para isso, precisamos pegar primeiro o tamanho do prefixo:
        return;
    } 
    $namespace = substr($classe, strlen($prefixo));

    $namespaceArquivo = str_replace('\\',DIRECTORY_SEPARATOR,$namespace); // Troca o caracter da barra dependendo o sistema operacional

    $arquivo = $diretorio.$namespaceArquivo.'.php';

    if (file_exists($arquivo)) {
        require $arquivo;
        }
}
);