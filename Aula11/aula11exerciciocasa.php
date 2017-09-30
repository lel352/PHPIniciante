<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula while</title>
    <link rel="stylesheet" href="_css/estilo.css" type="text/css" />
</head>    
<body>
    <div>
	  <?php
	    $valor1 = isset($_GET["v1"])?$_GET["v1"]:0;
		$valor2 = isset($_GET["v2"])?$_GET["v2"]:10;		
		$cont = isset($_GET["c"])?$_GET["c"]:1;		
		
		if ($valor1 == $valor2){
		   echo "Não tem um intervalo ";
		}		
		elseif ($valor1 < $valor2){
			while ($valor1<=$valor2){
				echo $valor1." ";
				$valor1 += $cont;
			}
		}
		else{
			while ($valor1>=$valor2){
				echo $valor1." ";
				$valor1 -= $cont;
			}			
		}		
	  ?>        
    </div>
</body>
</html>