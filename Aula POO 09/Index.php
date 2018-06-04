<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 09 - POO </title>
    </head>
    <body>
         <pre>
             <h1></h1>
         <?php
             require_once 'Pessoa.php';
             require_once 'Livro.php';
             $pessoas = array();
             
             $pessoas[0] = new Pessoa("Pedro",22,"M");
             $pessoas[1] = new Pessoa("Maria",31,"F");
             
             $livros = array();
             $livros[0] = new livro("Livro A","jose",300,$pessoas[0]);
             $livros[1] = new livro("Livro B","Mariana",500,$pessoas[0]);
             $livros[2] = new livro("Livro C","Ana",600,$pessoas[1]);
             
             $livros[0]->abrir();
             $livros[0]->folhear(500);
             $livros[0]->avancarPagina();
             $livros[0]->detalhes();
             
             $livros[1]->detalhes();
             $livros[2]->detalhes();
         ?>     
         </pre>
    </body>
</html>