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
      $preco = $_GET["p"];
      echo "Preço é R$ ".number_format($preco,2,",",".");
      $preco += $preco *0.1; //$preco = $preco + ($preco *0.1);
      echo "<br>Preço com acrescimo de 10% é R$ ".number_format($preco,2,",",".");
      $preco -= $preco *0.1; //$preco = $preco + ($preco *0.1);
      echo "<br>Preço com desconto de 10% é R$ ".number_format($preco,2,",",".");     
      
      $anoAtual = $_GET["aa"]; //Pegando da URL 
      echo "<br><br>Ano atual $anoAtual";
      echo "<br>Ano anterior ".$anoAtual--; //Pos decremento - primeiro mostro a variaveldepois decrementou
      echo "<br>Ano anterior ".$anoAtual; 
      $anoAtual = $_GET["aa"];
      echo "<br>Ano anterior ".--$anoAtual; //Pre decremento - primeiro decrementa e depois mostrar
      
      //Formas de comentarios
      /*
      Comentario em bloco 
      */
      #em linha pode ser -> # ou //
      
      
      //Referencias emtre variaveis 
      $a = 3;
      $b = 5;
      $b += $a;
      echo "<br><br>a $a e b $b";
      
      $a = 3;
      $b = &$a; //devido a isso qualquer mudança em $b afeta $a
      echo "<br><br>a $a e b $b";
      $b += 5;
      echo "<br><br>a $a e b $b";
      
      
      
      // Variaveis de variaves
      
      $site = "curso em videos";
      $$site = "curso em PHP"; //Cria uma variavel com o nome do conteudo da Variavel $site e depois colocar detnro dela o valor curso em php
      // Mais ou menos seria $cursoemvideos = "curso em php"
      
      echo "<br> $site";
      echo "<br> $cursoemvideos";
      
      $x = "abc";
      $$x = "def";
      
      echo "</br> $x";
      echo "</br> $abc";
      
      
      
      
      
      
     ?>
    </div> 
</body>
</html>