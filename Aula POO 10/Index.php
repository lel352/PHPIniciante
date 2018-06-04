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
             require_once 'Aluno.php';
             require_once 'Professor.php';
             require_once 'Funcionario.php';
             
             $p1 = new Pessoa();
             $p2 = new Aluno();
             $p3 = new Professor();
             $p4 = new Funcionario();
             
             $p1->setNome('Pedro');
             $p2->setNome('Maria');
             $p3->setNome('Cláudio');
             $p4->setNome('Fabiana');
             $p1->setSexo('M');
             $p4->setSexo('F');
             
             $p2->setCurso("Informatica");
             $p3->setSalario(2500.75);
             $p4->setSetor('Estoque');
             
             print_r($p1);
             print_r($p2);
             print_r($p3);
             print_r($p4);
             
             
             $p3->receberAumento(550.20);
             $p4->mudarTrabalho();
             $p2->cancelarMatricula();
             
             print_r($p1);
             print_r($p2);
             print_r($p3);
             print_r($p4);
            
         ?>     
         </pre>
    </body>
</html>