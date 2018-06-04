<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 04 - POO </title>
</head>    
<body>
     <pre>
    <?php
       require_once 'Caneta.php';
       $c1 = new Caneta('Nic','Vermelho',0.1);
       print_r($c1);
       $c1->setModelo("Bic");
       $c1->setponta(0.5);
       print_r($c1);
       print "Eu tenho um caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
       
       
       $c2 = new Caneta('Nic','Vermelho',0.5);
       print_r($c2);

    ?>
    </pre>
</body>
</html>