<?php

require_once "Mamifero.php";

class Cachorro extends Mamifero
{
    public function __construct(){} 
    
    public function enterraOsso(){
         echo "<p>Enterrando Osso</p>";
    }
    
    public function abanarRabo(){
         echo "<p>Abanando o Rabo</p>";
    }
    
    public function emitirSom(){
        echo "<p>Au!Au!Au!</p>";
    }
}

?>