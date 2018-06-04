<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 03 - POO </title>
</head>    
<body>
     <pre>
    <?php
       require_once 'Caneta.php';
       $c1 = new Caneta; //public
       $c1->modelo = "Bic Cristal";//public
       $c1->cor = "Azul";
       //$c1->ponta = 0.5;// private
       //$c1->carga = 99; //´ protected
       //$c1->tampada =  true; //  protected
      
       print_r($c1);
       echo "<br>";
       var_dump($c1);
       
       $c1->rabiscar();
       $c1->tampar(); 
       print_r($c1);
       echo "<br>";
       $c1->destampar(); 
       echo "<br>";
       print_r($c1);
    ?>
    </pre>
</body>
</html>