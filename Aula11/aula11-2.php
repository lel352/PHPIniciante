<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Funções aritmitcas em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" type="text/css" />
</head>    
<body>
    <div>
        <form method="get" action="aula1122.php">
           <?php 
             $caixa = 1;
             while ($caixa <= 5){
                echo "Valor $caixa: <input type='number' name='v$caixa'  max='100' min='0' value='0'/><br/>"; //aqui o html tem que ser aspas simples 
                $caixa ++;
             }
           ?>
           <input type="submit" value="Enviar" class="botao"/>
        </form>
    </div>
</body>
</html>