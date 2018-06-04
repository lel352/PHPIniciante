<?php

require_once 'Animal.php';

class Peixe extends Animal
{
    private $corEscama;
    
    function getCorEscama(){
        return $this->corEscama;
    }
    
    function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
    
    public function __construct(){}
    
         //sobreposicao
    public function locomover(){
        echo "<p>Nadando</p>";
    }
    
    public function alimentar(){
        echo "<p>Comendo Substâncias</p>"; 
    }
    
    public function emitirSom(){
        echo "<p>Peixe não faz som</p>";
    }
    
    public function soltarBolha(){
        echo "<p>Soltar uma Bolha</p>";
    }
   
}

?>