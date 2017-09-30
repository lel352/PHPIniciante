<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>aula 13</title>
    <link rel="stylesheet" href="_css/estilo.css" type="text/css" />
</head>    
<body>
    <div>
       <?php
	     for ($c = 1;$c <= 10;$c++){
			echo "$c ";
		 }
		 echo "</br>";
		 for ($i = 10; $i >=10;$c--){
			echo "$i ";
		 }
		 echo "</br>";
		 for ($i = 0; $i <= 100; $c += 5){
		    echo "$i ";	 
		 }
		 echo "</br>";
		 for ($i = 20; $i >=0; $i -=2){
			echo "$i ";	  
		 }
		 echo "</br>";
		 
		 $num = isset($_GET["num"])?$_GET["num"]:1;
		 echo "Tabuada </br>";
		 for ($c = 1;$c <= 10; $c++){
			 $resu = $c * $num; 
			 echo "$num * $c = $resu </br>";
		 }
		 
		 echo "</br>";
		 
		 $p = isset($_GET["p"])?$_GET["p"]:1;
		 $c = 0;
		 for ($i = 1;$i <= $p; $i++){
			 if ($p%$i == 0){
				$resu = "$i, ";
				$c++: 
			 }
		 }
		 
		if ($c == 2) {
		   echo "$p é um numero primo"; 
		}   
	    else {
		   echo "$p não é primo, ele é divisivel por $c </br>"; 	
		   echo " $resu </br>"; 			   
		}   
	   ?>
	   
		<br/>
		<a href="javascript:history.go(-1)"> 
		Voltar
		</a>
    </div>
</body>
</html>