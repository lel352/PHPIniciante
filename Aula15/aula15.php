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
        $a = 15;
        echo "<p>A = $a</p>";
        
        function soma(&$x) {// passagem por referencias alterando o valor de de $a 
            $x += 2;
            echo "<p>A = $x</p>";
        }
        soma($a);
        echo "<p>A = $a</p>";
        
        include "funcoes.php"; //Incluir arquivo externo;
        //require "funcoes.php"; //inclui arquivos mas se nãp conseguir fazer isso ele para de fazer a leitura do resto da pagina
        //include_once //Inclui arquivo externo; (once)mas se ele ja está carregado não inclui novamente ;
        //require_once; //inclui arquivos mas se nãp conseguir fazer isso ele para de fazer a leitura do resto da pagina,(once) mas se ele ja está carregado não inclui novamente ;
        
        echo "Testandoo </br>";
        
        ola();
        mostrarValor("Aikido");
        
      ?>
    </div>
</body>
</html>