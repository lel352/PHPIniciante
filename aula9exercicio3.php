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
          $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
          $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
          
          $media = ($nota1+$nota2) /2;
          
          if ($media >= 7 ){
              echo "Sua media é $media, está Aprovado";
          }
          elseif ($media >= 5 && $media < 7){
              echo "Sua media é $media, está em Recuperação";
          }
          else 
             echo "Sua media é $media, está Reprovado";
          
          
        ?>
        
    </div>
</body>
</html>