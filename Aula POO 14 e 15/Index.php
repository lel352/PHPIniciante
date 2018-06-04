<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 14 e 15 - POO </title>
    </head>
    <body>
         <pre>
             <h1></h1>
         <?php
             require_once 'Gafanhoto.php';
             require_once 'Video.php';
             require_once 'Pessoa.php';
             require_once 'Visualizacao.php';
             
             $video[0] = new Video("Aula 1");
             $video[1] = new Video("Aula 2");
             $video[2] = new Video("Aula 3");
             $video[3] = new Video("Aula 4");
             $video[4] = new Video("Aula 5");
             
             print_r($video);
             
             $gafanhoto[0] = new Gafanhoto("Jubileu",21,"m","Juju");
             $gafanhoto[1] = new Gafanhoto("Creuza",12,"F","Creu");
             
             print_r($gafanhoto1);
             print_r($gafanhoto2);
             
             
             $visualizacao[0] = new Visualizacao($gafanhoto[0],$video[2]);
             $visualizacao[0]->avaliar();
             
             $visualizacao[1] = new Visualizacao($gafanhoto[0],$video[1]);
             $visualizacao[1]->avaliarPorcentagem(85);
             
             print_r($visualizacao);
         ?>     
         </pre>
    </body>
</html>