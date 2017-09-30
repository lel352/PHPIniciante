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
          $valor = isset($_GET["valor"])?$_GET["valor"]:1;
          $op = isset($_GET["oper"])?$_GET["oper"]:1;
          
          echo "$op";
          
          switch ($op) {
              case  1:
                  $resu = $valor*2;
                  echo "o dobro de $valor é $resu";
                  break;
              case  2:
                  $resu = $valor ^ 3;
                  echo "o cubo de $valor é $resu";
                  break;
              case  3:
                  $resu = sqrt($valor);
                  echo "A raiz de $valor é $resu";
                  break;                  
              default:
                  echo "Nenhuma Operação foi escolhida";
                  break;
          }
          
          
       ?>
    </div>
</body>
</html>