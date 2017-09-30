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
        // Operadores Ternários
         $operacao = $_GET["op"];
         $valor1 = $_GET["a"];
         $valor2 = $_GET["b"];
         
         echo "Valores passados $valor1 e $valor2 <br/>";
         
         $resultado = ($operacao == "s") ? $valor1+$valor2 : $valor1*$valor2;
         
         echo "Resultado será $resultado";
         
         $a = 3;
         $b = "3";
         
         $resultado = ($a === $b) ? "Sim": "Não"; //Verifica se os conteudos das variaveis são identicas e se os tipos delas também são
         
         echo "<br>As variaveis são iguais ? $resultado";
         
         
         
         $nota1 = $_GET["n1"];
         $nota2 = $_GET["n2"];
         $media = ($nota1 + $nota2)/2;
         
         echo "<br/> A media entre $nota1 e $nota2 e $media <br>";
         
         $situacao = $media <6 ? "reprovado" : "Aprovado";
         
         echo "Situação do Aluno: $situacao";
         
         echo "<br/> Situação do Aluno ".($media <6 ? "reprovado" : "Aprovado");
         
         
         $ano = $_GET["ano"];
         $idade = 2016 - $ano;
         echo " <br/> Quem nasceu em $ano tem idade de $idade ";
         
         $tipo = ($idade >=18 && $idade <65)? "obrigatorio": "Não Obrigatorio";
         echo "<br/> Seu voto é $tipo";
         
?>
        
        </div>
        
</body>
</html>