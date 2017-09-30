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
          $c = 1;
          do{
              echo "$c ";
              $c++;
          }while ($c <= 10);
          echo "</br>";
          $c = 0;
          do{
              echo "$c ";
              $c += 2;
          }while ($c <= 20);
          echo "</br>";
          $c = 10;
          do{
              echo "$c ";
              $c -= 1;
          }while ($c >= 1);
          echo "</br>";
          
          
          $f =  isset($_GET["val"])?$_GET["val"]:1;
          $c = $f; 
          $val = 1;
          do{
              $val = $val * $c; 
              $c -= 1;
          }while($c >= 2);
          
          echo "fatoril de $f é $val";
          
          echo "</br>";
          echo "</br>";
          
          echo " Tabuada de $f";
          echo "</br>";
          $c = 1;
          do{
            echo "$f x $c = ".($c*$f);
            echo "</br>";
            $c++;
          }while($c <= 10);
          
          
          
          
          
          
        ?>
        </br>
        </br>
        </br>
        <a href="aula2.html" class="botao">voltar</a>   
    </div>
</body>
</html>