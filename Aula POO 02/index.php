<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 02 - POO </title>
</head>    
<body>
    <?php
       require_once 'Caneta.php';
       $c1 = new Caneta;
       $c1->cor = "Azul";
       $c1->ponta = 0.5;
       $c1->tampada = true;//diferente de vazio e zero é true
       
       $c1->rabiscar();
       print_r($c1);
       $c1->destampar();
       echo "<br>";
       $c1->rabiscar();
       print_r($c1);
       $c1->tampar();
       echo "<br>";
       $c1->rabiscar();
       print_r($c1);
       
       $c2 = new Caneta;
       $c2->cor = "Verde";
       $c2->carga = 50;
       $c2->ponta = 0.10;
       $c2->tampada = true;//diferente de vazio e zero é true
       
       echo "<br>";
       print_r($c2);
       
    ?>
</body>
</html>