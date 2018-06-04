<?php

require_once "Aluno.php";

class Bolsista extends Aluno
{
    private $bolsa;
    
    public function getBolsa(){
        return $this->bolsa;
    }
    
    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
    
    public function removarBolsa(){
        echo "<p> Bolsa Renovada </p>";
    }
    
    public function pagarMensalidade(){
        echo "<p><strong>".$this->nome."</strong> é bolsista! Então paga com desconto!</p>";
    }
}
?>