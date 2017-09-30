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
          $ano = isset($_GET["ano"])? $_GET["ano"] : 1900;
          $idade = date("Y") - $ano;
          echo "Você nasceu em $ano </br>";
          echo "Sua idade é $idade </br>";
          if ($idade > 66){
              $voto = " voto opcional ";
              $dirigir = "já pode dirigir";
          }
          elseif ($idade > 18){
              $voto = "já pode votar";
              $dirigir = "já pode dirigir";
          }
          elseif ($idade >= 16){
              $voto = "voto opcional";
              $dirigir = "não pode dirigir";
          }
          else {
              $voto = "não pode votar";
              $dirigir = "não pode dirigir";
          }
   
          echo "Com essa $idade você $voto e também $dirigir";
          
          
       ?>
    </div>
</body>
</html>