<?php
require_once "Mamifero.php";

class Lobo extends Mamifero
{
    
    public function __construct(){}
    
    //sobreposicao - overhide
    public function emitirSom(){
        echo "<p>Auuuuuuuuuuuuuuuuu!</p>";
    }
    
}
?>