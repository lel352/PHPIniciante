<?php

require_once 'Animal.php';

class Reptil extends Animal
{
    private $corEscama;
    
    public function __construct(){}
    
    function getCorEscama(){
        return $this->corEscama;
    }
    
    function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
    
        //sobreposicao
    public function locomover(){
        echo "<p>Rastejando</p>";
    }
    
    public function alimentar(){
        echo "<p>Comendo Vegetais</p>"; 
    }
    
    public function emitirSom(){
        echo "<p>Som de Réptil</p>";
    }
}

?>