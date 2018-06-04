<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 06 - POO </title>
    </head>
    <body>
         <pre>
             <h1>Projeto Controle Remoto</h1>
         <?php
             require_once 'ControleRemoto.php';
             $controleRemoto =  new ControleRemoto();
             //$controleRemoto->ligar();
             $controleRemoto->menosVolume();
             $controleRemoto->abrirMenu();
             $controleRemoto->fecharMenu();
             
             $controleRemoto->ligar();
             $controleRemoto->maisVolume();
             $controleRemoto->abrirMenu();
             $controleRemoto->fecharMenu();
         ?>
         </pre>
    </body>
</html>