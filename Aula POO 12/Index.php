<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 12 - POO </title>
    </head>
    <body>
         <pre>
             <h1></h1>
         <?php
             require_once 'Mamifero.php';
             require_once 'Reptil.php';
             require_once 'Peixe.php';
             require_once 'Ave.php';
             require_once 'Canguru.php';
             require_once 'Cachorro.php';
             require_once 'Tartaruga.php';
             
             $mamifero = new Mamifero();
             $repetil = new Reptil();
             $peixe = new Peixe();
             $ave = new Ave();
             $canguru = new Canguru(); 
             $cachorro = new Cachorro();
             $tartaruga = new Tartaruga();
             
             echo "<hr>";
             echo "<p> Mamifero </p>";
             
             $mamifero->setPeso(85.3);
             $mamifero->setIdade(2);
             $mamifero->setMembros(4);
             $mamifero->setCorPelo("Preto");
             print_r($mamifero);
             $mamifero->locomover();
             $mamifero->alimentar();
             $mamifero->emitirSom();
             
             $canguru->setPeso(55.30);
             $canguru->setIdade(3);
             $canguru->setMembros(4);
             $canguru->setCorPelo("Marrom");
             print_r($canguru);
             $canguru->locomover();
             $canguru->alimentar();
             $canguru->emitirSom();
             $canguru->usarBolsa();
             
             $cachorro->setPeso(3.94);
             $cachorro->setIdade(5);
             $cachorro->setMembros(4);
             $cachorro->setCorPelo("Branco");
             print_r($cachorro);
             $cachorro->locomover();
             $cachorro->alimentar();
             $cachorro->emitirSom();
             $cachorro->abanarRabo();
             $cachorro->reagir("olá");
             $cachorro->reagir("apanhar");

             
             echo "<hr>";
             echo "<p> Peixe </p>";
             
             $peixe->setPeso(0.35);
             $peixe->setIdade(1);
             $peixe->setMembros(0);
             $peixe->setCorEscama("Azul");
             print_r($peixe);
             $peixe->locomover();
             $peixe->alimentar();
             $peixe->emitirSom();
             $peixe->soltarBolha();
             
             
             echo "<hr>";
             echo "<p> Ave </p>";
             
             $ave->setPeso(0.86);
             $ave->setIdade(2);
             $ave->setMembros(2);
             $ave->setCorPena("Marrom");
             print_r($ave);
             $ave->locomover();
             $ave->alimentar();
             $ave->emitirSom();
             $ave->fazerNinho();
             
             echo "<hr>";
             echo "<p> Tartaruga </p>";
             
             $tartaruga->setPeso(05.86);
             $tartaruga->setIdade(100);
             $tartaruga->setMembros(4);
             $tartaruga->setCorEscama("Verde");
             print_r($tartaruga);
             $tartaruga->locomover();
             $tartaruga->alimentar();
             $tartaruga->emitirSom();
         ?>     
         </pre>
    </body>
</html>