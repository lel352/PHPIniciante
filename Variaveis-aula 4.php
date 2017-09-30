<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Programa teste 2</title>
    <link rel="stylesheet" href="_css/estilo.css" type="text/css" />
</head>    
<body>
    <div>
     <?php 
       $idade = 18;
       $nome = (string) "Juli";
       echo $nome."<br/>";
       echo $nome." tem ".$idade." anos! <br/>";
       echo "$nome tem $idade anos! <br/>";
       
       $valor  = 1;
       $valor2 = 2;
       $total = $valor + $valor2;
       
       echo " A soma entre $valor e $valor2 é igual a $total <br/><br/>";
       
       $n1 = 3;
       $n2 = 2;
       
       //?a=5&b=6 colocar na url assim pegar valores por lá
       $n1 = $_GET["a"];
       $n2 = $_GET["b"];
       $media = ($n1+$n2)/2;
       
       echo "valores recebidos $n1 e $n2";
       echo "<br/>A soma vale ".($n1 + $n2);
       echo "<br/> A subtração vale ".($n1 - $n2);
       echo "<br/> A multiplicação vale ".($n1 * $n2);
       echo "<br/> A divisão vale ".($n1 / $n2);
       echo "<br/> O modulo vale ".($n1 % $n2);
       echo "<br/> Media vale $media";
     ?>
     </div>
</body>    
</html>