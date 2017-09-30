<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>aula 13</title>
    <link rel="stylesheet" href="_css/estilo.css" type="text/css" />
</head>    
<body>
    <div>
		<form method="get" action="aula13e1.php">
		   <select name="num">
				<?php 
					for ($c = 1; $c <= 10; $c++){
					 echo "<option>$c</option>";
					}
				?>
		   </select>
		   Numero: <input type="number" name="p" value="1"/>
		   <input type="submit" value="Tabuada"/>
		</form>
    </div>
</body>
</html>