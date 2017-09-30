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
           $valor = $_GET["v"];
           echo "o Valor enviado foi $valor <br/>";
           $raiz = sqrt($valor);
           echo "A raiz de $valor é ".number_format($raiz,2);
        ?>
    </div>
    <br/>
    <a href="aula8-exercicio 1.html"> Voltar </a>
        
</body>
</html>