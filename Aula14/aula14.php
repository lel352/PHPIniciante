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
        function soma($a, $b) {
            $s = $a + $b;
            return $s;
        } 
        $re = soma(10,15);
        echo "<p>A soma vale $re</p>";
        $re = soma(78,45);
        echo "<p>A soma vale $re</p>";
        $re = soma(8,4);
        echo "<p>A soma vale $re</p>";
        
        
        function soma1(){
            $p = func_get_args();//Pegar todos os argumentos dentro de um vetor.
            $t = func_num_args();//NUmero de argumentos passados.
            $res = 0;
            for ($i = 0; $i<$t; $i++){
                $res += $p[$i];
            }
            return $res;
        }
        
        $re = soma1(1,2,3,4,5,6,7,8);
        echo "<p>A soma vale $re</p>";
        
        
        

        
      ?>
    </div>
</body>
</html>