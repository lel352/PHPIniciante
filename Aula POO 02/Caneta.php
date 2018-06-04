<?php

/** Classe exemplo PHP
 * 
 */
class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    public function rabiscar(){
        if ($this->tampada){
            echo "<p>Erro! Não posso rabiscar</p>";
        }else {    
           echo "<p>Estou rabiscando</p>";
        }
    }
    
    public function tampar(){
        $this->tampada =  true;
    }
    
    public function destampar(){
        $this->tampada =  false;
    }
    
}
?>