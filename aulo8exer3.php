<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
      $txt = isset($_GET["t"])?$_GET["t"]:"texto generico";
      $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
      $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?> 
    <meta charset="UTF-8"/>
    <title>Funções aritmitcas em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" type="text/css" />
    <style type="text/css">
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
        
    </style>
</head>    
<body>
    <div>
      <?php
         echo "<span class='texto'> $txt    </span>";
      ?>  
    </div>
     <a href="aulo8exer3.html">Voltar</a>  
</body>
</html>