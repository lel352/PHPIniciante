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
   $i = 1;
   while ($i <= 5) {
      $v = "num" . $i;
      $url = "v" . $i;
      $$v = isset($_get[$url])?$_get[$url] : 0;
      $i++;
   }
   $i = 1;
   while ($i <= 5) {
      $v = "num" . $i;
      echo "valor $i : " . $$v . "<br/>";
      $i++;
   }
        
        
        
        
        
          $valor1 = $_GET["v1"];
          $valor2 = $_GET["v2"];          
          $valor3 = $_GET["v3"];
          $valor4 = $_GET["v4"];                    
          $valor5 = $_GET["v5"];          
          
          echo "valor 1 $valor1 </br>";
          echo "valor 2 $valor2 </br>";
          echo "valor 3 $valor3 </br>";
          echo "valor 4 $valor4 </br>";
          echo "valor 5 $valor5 </br>";
        ?>
    </div>
</body>
</html>