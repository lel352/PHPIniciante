<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 05 - POO </title>
    </head>
    <body>
         <pre>
         <?php
             require_once 'ContaBanco.php';
             $p1 = new ContaBanco(); //Jubileu
             $p2 = new ContaBanco(); //Creusa
             $p1->abrirConta("CC");
             $p1->setNomeDono("Jubileu");
             $p1->setNumeroConta(1111);
             
             $p2->abrirConta("CP");
             $p2->setNomeDono("Creusa");
             $p2->setNumeroConta(2222);
             
             $p1->depositar(300);
             $p2->depositar(500);
             
             
             $p2->sacar(100);
             
             $p1->pagarMensalidade();
             $p2->pagarMensalidade();
             
             
             $p2->sacar(1000);
             
             $p1->fecharConta();
             $p2->fecharConta();
             
             $p1->sacar(338);
             $p2->sacar(530);
             
             $p1->fecharConta();
             $p2->fecharConta();         
             
             $p1->sacar(100);
             
             print_r($p1);
             print_r($p2);
         ?>
         </pre>
    </body>
</html>