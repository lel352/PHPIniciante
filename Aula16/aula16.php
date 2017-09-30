<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Funções para String em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" type="text/css" />
</head>    
<body>
    <div>
      <?php
        $prod = "leite";
        $preco = 4.5;
        printf("O %s está custando %.2f <br>", $prod, $preco);    
        /*
        %d = valor decimal (positivo e negativo)
        %u = valor decimal sem o sinal de positivo e negativo
        %f = valor real
        %s = string;
        */
        
        $x[0] = 4;
        $x[1] = 2;
        $x[2] = 0;
        $x[3] = 10;
        print_r($x); //mostra todos os dados do vertor util para usar em testes;
        echo "</br>";

        $v = array (3,7,8,9,4,5);
        print_r($v);
        echo "</br>";
        var_export($v);//mostra todos os dados do vertor util para usar em testes;

        echo "</br>";
        var_dump($v);//mostra todos os dados do vertor util para usar em testes;
    
        echo "</br>";
        $txt = "Quando você está no modo invisível, as páginas que você visita não aparecem no seu histórico de navegação e de pesquisa, nem armazenam arquivos cookies. Mas os downloads e os favoritos continuam funcionando normalmente.";
        $res = wordwrap($txt); //quebra o texto        
        echo $res;
        echo "</br>";
        $res = wordwrap($txt,8); //quebra o texto 8 ali é quantidade de caracter por linha dentro do codigo fonte do php        
        echo $res;
        echo "</br>";
        $res = wordwrap($txt,20,"<br>"); //quebra o texto 20 ali é quantidade de caracter por linha dentro do codigo fonte do php        
        // no ultimo paramentro com <br> tu torna essa quebra visivel substitui o \n dentro do codigo php por <br>, ultimo paramentro permite isso
        echo $res;
        echo "</br>";        
        $res = wordwrap($txt,5,"<br>",false); //quebra o texto 20 ali é quantidade de caracter por linha dentro do codigo fonte do php        
        // no  paramentro com <br> tu torna essa quebra visivel substitui o \n dentro do codigo php por <br>, ultimo paramentro permite isso        
        //false não quebra as palavras no meio se tiver mais de 5 caracter
        echo $res;
        echo "</br>";        
        $res = wordwrap($txt,5,"<br>",true); //quebra o texto 20 ali é quantidade de caracter por linha dentro do codigo fonte do php        
        // no  paramentro com <br> tu torna essa quebra visivel substitui o \n dentro do codigo php por <br>, ultimo paramentro permite isso        
        //true ele vai quebrar palavra não importa o tamalho dela
        echo $res;
        echo "</br>";
        
        $tama = strlen($txt);
        echo $tama;
        echo "</br>";
        $txt = "       leandro Sartor Pereira           ";
        $trimm = trim($txt);
        echo  $trimm;
        echo "</br>";
        $trimm = ltrim($txt);//Somente elimina espaços da esquerda
        echo  $trimm;
        echo "</br>";
        $trimm = rtrim($txt);//Somente elimina espaços da Direita
        echo  $trimm; 
        echo "</br>";
        $cont = str_word_count($txt,0);//0 - contar as palavras
        echo "$cont";
        
        echo "</br>";
        $cont = str_word_count($txt,1);// 1 - cria um vetor;
        print_r($cont);        
        
        echo "</br>";
        $cont = str_word_count($txt,2);// 2 - cria um vetor a posição é a posisão deles na frase
        print_r($cont);        
        
        echo "</br>";
        $site = "Curso em video";
        $vetor = explode(" ",$site);//criar um vetor, conforme o caracter de separação informada no primeiro paramentro;
        print_r($vetor);
        
        echo "</br>";
        $nome = "maria";
        $vetor =  str_split($nome);//pegar cada letra e coloca no vetor;
        print_r($vetor);
        
        echo "</br>";
        $veto[0] = "casa";
        $veto[1] = "da";
        $veto[2] = "cultura";
        $txt =  implode("#",$veto); //primeiro paramentro é o que vai entre os indices 
        echo $txt;
        $txt = join("#",$veto); //primeiro paramentro é o que vai entre os indices 
        // o Join faz a mesma coisa que o implode
        echo $txt;     
        
        $letra = chr(67);
        echo "<br> A letra de código 67 é $letra <br>";
        
        $codigo = ord("c");
        echo "<br> A letra 'c' seu código é $codigo <br>";        
        
        $nome = "Leandro Sartor Pereira";
        print("<br> Seu nome é ".strtolower($nome));
        
        $nome = "Leandro Sartor Pereira";
        print("<br> Seu nome é ".strtoupper($nome));
        
        $nome = "leandro sartor pereira";
        print("<br> Seu nome é ".ucfirst($nome));// primeira letra da frase em maiuscula 
        
        $nome = "leandro sartor pereira";
        print("<br> Seu nome é ".ucwords($nome));// primeira letra de cada palavra fica maiúscula
        
        $nome = "Leandro Sartor Pereira";
        print("<br> Seu nome ao contrario é ".strrev($nome));        
        
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");// começa com zero e conta espaços 0,1,2,3,... // ele é casesensitive
        echo "<br>$frase<br>";
        echo "String php encontra na posisão $pos";
       
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "php");// começa com zero e conta espaços 0,1,2,3,... //SubString// não importa se ta maiuscula ou minusculas ele acha
        echo "<br>$frase<br>";
        echo "String php encontra na posisão $pos";
        
        $frase = "Estou aprendendo PHP em curso em video PHP";
        $cont = substr_count($frase,"PHP");// é case sensitive
        echo "<br> quantidade de PHP $cont";
       
        $site = "Curso em video";
        $sub = substr($site,0,5);//copia parte de uma string
        echo "<br>$sub";
        
        $site = "Curso em video";
        $sub = substr($site,6);//copia parte de uma string //copia da posição 6 em diante
        echo "<br>$sub";
        
        $site = "Curso em video";
        $sub = substr($site,-5);//copia parte de uma string //copia as ultimas 5 letras
        echo "<br>$sub";
        
        $site = "Curso em video";
        $sub = substr($site,-5,2);//copia parte de uma string //das ultimas 5 letras copia as 2 primeras
        echo "<br>$sub";
        echo "<br>";
        
        $nome = "Sartor";
        $novoNome = str_pad($nome,30," ",STR_PAD_RIGHT);//LEFT e CENTER
        echo "Meu Sobrenome é $novoNome, obrigado!";
        
        $txt = str_repeat("PHP",5);
        echo "<br> o texto gerado é $txt";
        
        echo "<br> ";
        $frase = "gosto de estudar matematica";
        echo $frase; 
        $novaFrase = str_replace("matematica","PHP",$frase);//casesensitive na busca
        $novaFrase = str_ireplace("matematica","PHP",$frase);//i na frente ignora o casesensitive na busca
        echo "<br> ";
        echo $novaFrase;
        
        
      ?>
    </div>
</body>
</html>