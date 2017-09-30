<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Funções aritmitcas em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" type="text/css" />
</head>    
<body>
    <div>
       <?php
         $cont=1;   
         while ($cont <= 10){
             echo "$cont </br>";
             $cont++;
         }
         
         echo "</br>";
         $cont = 10;
         while ($cont >= 1){
             echo "$cont </br>";
             $cont--;
         }
         
         echo "</br>";
         $cont = 10;
         while ($cont >= 1){
             echo "$cont </br>";
             $cont-=2;
         }
         
       ?>
    </div>
</body>
</html>