<?php

require_once 'Animal.php';

class Ave extends Animal
{
    private $corPena;
    
    function getCorPena(){
        return $this->corPena;
    }
    
    function setCorPena($corPena){
        $this->corPena = $corPena;
    }
    
    public function __construct(){}
    
    //sobreposicao
    public function locomover(){
        echo "<p>Vooando</p>";
    }
    
    public function alimentar(){
        echo "<p>Comendo Frutas</p>"; 
    }
    
    public function emitirSom(){
        echo "<p>Som da Ave</p>";
    }
    
    public function fazerNinho(){
        echo "<p>Construindo um Ninho</p>";
    }
}

?>