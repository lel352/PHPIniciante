<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Funções para vetoros PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" type="text/css" />
</head>    
<body>
    <div>
      <pre>
      <?php
          $n[0] = 4; 
          $n[1] = 5;
          $n[2] = 6; 
          $n[3] = 7;
          
          echo"<br>";
          print_r($n);
 
          $n[] = 8;
          echo"<br>";
          print_r($n);
          
          $m = array(5,8,9,4,2); 
          echo "<br>";
          print_r($m);
          
          $m[] = 10;
          echo"<br>";
          print_r($m);  
          
          
          $c = range(5,20,5);//primeira pramentro valor da primeira posicao do array: 5
 //segundo paramentro valor da ultima posicao do array: 20                    
 //terceiro paramentro valor somando com o numero atenrior para dar o valor da proxima posição
 //Assim esse exemplo ele vai de 5 em 5 até cehgar em 20
//Ex: começa com o 5 =>|5| proxima posicao 5(da anterio)+5 = 10 |10|, proxima posicao 10 + 5 = 15 |15| ultima casa ja era o 20;
 //como fica o array |5|10|15|20|
          echo"<br>";
          print_r($c);  
          
          $c = range(5,20,2);//pulando em 2 em 2 para chegar até 20
          echo"<br>";
          print_r($c);  
          echo"<br>";
          foreach($c as $valor){ //pegar cada elemento do vetor $c é colocado na variavel  $valor
          	echo "$valor <br>";
          }
          
          $v = array(1=>"A",3=>"B",6=>"C",8=>"D");
          echo"<br>";
          print_r($v);  
          $v[] = 'E';
          echo"<br>";
          print_r($v);  
          
          unset($v[9]);//tirar a posicao da memoria;
          
          echo"<br>";
          print_r($v);  
          
          $cad = array("nome"  => "Ana", 
                       "idade" => 23,
                			  "peso" => 78.5);
          echo"<br>";
          print_r($cad);      			  
          $cad["fuma"] = true;
          echo"<br>";
          print_r($cad);      			
          
          foreach($cad as $key => $con){
	           echo "o indice $key tem o conteudo $con </br> ";
          }
          
          //Vetor dentro de vetor para fazer matrizes
          $m = array(array(2,3),
               array(3,4), 
			         array(9,5));
          echo"<br>";
          print_r($m);		
          
          $m[0][1] = $m[2][0];
          echo"<br>";
          print_r($m);		
          
          
          $n = array(5,3,6,8);  
          echo"<br>";
          print_r($n);      			            
          echo"<br>";
          var_dump($n);
          echo "<br> o vetor tem ".count($n)." elementos <br>";
          
          $n[] = 9;
          echo"<br>";
          print_r($n);     
          //pilha e fila
          array_push($n,10);//colocar no funal
          echo"<br>";
          print_r($n);     
          array_pop($n);//eliminar o ultimo elemento do vetor;
          echo"<br>";
          print_r($n);     
          array_unshift($n,12); //colocar no inicio do vetor
          echo"<br>";
          print_r($n);     
          array_shift($n);//elimina elemento do inicio do vetor;
          echo"<br>";
          print_r($n);  
          $mm = $n;
          sort($n);
          echo"<br>";
          print_r($n);            
          rsort($n); //R de revorse
          echo"<br>";
          print_r($n);                      
          echo"<br>";
          print_r($mm);                      
          asort($mm); //ordenação associativa ordena os valores mas sem mudar os indices do campos
          echo"<br>";
          print_r($mm);                      
          arsort($mm); //ordenação ao contrario associativa ordena de tras para frente os valores mas sem mudar os indices do campos
          echo"<br>";
          print_r($mm);  
          
          $ke = array(3=>'C', 2=>"H", 0=>"G", 1=>"A");
          echo"<br>";
          print_r($ke);  
          ksort($ke);//ordena pelo indice
          echo"<br>";
          print_r($ke);  
          krsort($ke);//ordena ao contrari pelo indice
          echo"<br>";
          print_r($ke);
          
          
          for($i=0; $i<=10; $i++){
           if($i % 3 == 0)
                   continue;
           echo $i."-";
          }
          
          echo "Fim<br>";
          
        $x = 4;
$y = &$x;
$z = ++ $y;
echo "X=$x Y=$y Z=$z";



function f($v, $n) {
		if ($n <= 0) return 1;
		else
		return $v[$n-1] * f($v, $n-2) + 1;
	}
	$a = array(0,1,2,3);
	echo "<br>";
	print (f($a, 4));
echo "<br>";
$a=10;
$b=2;
$j=$a/2;
for ($i=0;$i<$j;$i++){
    if ($i % $b == 1) 
	echo "$i";
}

$a = 2;
  $b = 3;
  $c = ($a>$b)?true:false;
  print $c;

      ?>
      </pre>
    </div>
</body>
</html>