<?php

require_once 'Gafanhoto.php';
require_once 'Video.php';

class Visualizacao 
{
    private $espectador;
    private $filme;
    
    public function __construct($espectador,$filme){
        $this->expectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews()+1);
        $this->expectador->viuMaisUm();
    }    
    
    public function getExpectador(){
       return $this->expectador;
    }
   
    public function setExpectador($expectador){
       $this->expectador = $expectador;
    }
    
    public function getFilme(){
       return $this->filme;
    }
   
    public function setFilme($filme){
       $this->filme = $filme;
    }
    
    public function avaliar(){
       $this->filme->setAvaliacao(5);  
    }
    
    public function avaliarNota($nota){
       $this->filme->setAvaliacao($nota); 
    }
    
    public function avaliarPorcentagem($porcentagem){
        $nova = 0;
        if ($porcetagem <= 20){
            $nova = 3;
        }
        elseif ($porcetagem <= 50){
            $nova = 5;
        }
        elseif ($porcetagem <= 90){
            $nova = 8;
        }
        else{
            $nova = 10;
        }    
        $this->filme->setAvaliacao($nota);    
    }
    
}

?>