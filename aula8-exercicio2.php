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
           $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não Informado]";// se foi passado por paramentro
           $ano = isset($_GET["ano"])?$_GET["ano"]:0;
           $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem Sexo]";
           $idade = date("Y") - $ano; // Y -maiusculo mostra o ano com 4 digitos - minusculo mostrar com 2
           
           echo "$nome é $sexo com $idade anos <br/>"
        ?>
    </div>
    <a href="aula8-exercicio2.html">Voltar</a>       
</body>
</html>