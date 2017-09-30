<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Funções aritmitcas em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" type="text/css" />
    <style type="text/css">
         h2 {
             font: 15pt Arial;
             color: #171559;
             font-weight: bold;
         }
    </style>
</head>    
<body>
    <div>
    <?php
       $valor = $_GET["x"];
       $valo2 = $_GET["y"];
       
       echo "<h2> Valores recebidos $valor e $valo2 </h2>";
       echo "valor absoluto de $valo2 é ".abs($valo2);
       echo "<br>Valor de $valor <sup>$valo2</sup> e ".(pow($valor,$valo2));
       echo "<br>Raiz quadrada de $valor e ".(sqrt($valor));
       echo "<br>O Valor de $valo2 arrendondado e ".(round($valo2));
       echo "<br>O Valor de $valo2 arrendondado para acima 'Ceil'  e ".(ceil($valo2));
       echo "<br>O Valor de $valo2 arrendondado para baixo 'floor'  e ".(floor($valo2));
       echo "<br>A parte inteira de $valo2 e ".intval($valo2);
       echo "<br>O valor de $valor em modea e R$".number_format($valor,2,",",".");
       
       
     ?>
    </div> 
</body>
</html>