<?php
require_once 'Lutador.php';

class  Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;
    
    //public function __construct(){}
    
    public function getDesafiado(){
        return $this->desafiado;
    }
    
    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    
    public function getDesafiante(){
        return $this->desafiante;
    }
    
    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }
    
    public function getRounds(){
        return $this->desafiante;
    }
    
    public function setRounds($rounds){
        $this->rounds = $rounds;
    }
    
    public function getAprovado(){
        return $this->aprovado;
    }
    
    public function setAprovado($aprovado){
        $this->aprovado = $aprovado;
    }
    
    
    public function marcarLuta($lutador,$lutador2){
        if (($lutador->getCategoria() === $lutador2->getCategoria()) &&
         ($lutador != $lutador2)){
           $this->setAprovado(true) ;
           $this->setDesafiado($lutador);
           $this->setDesafiante($lutador2);
         }
         else{
           $this->setAprovado(false) ;
           $this->setDesafiado(null);
           $this->setDesafiante(null);
         }
    }

    public function lutar(){
        if ($this->getAprovado()){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0://Emapate
                    echo "<p>Empatou!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Desafiado Vence
                    echo "<p>".($this->desafiado->getNome())." Venceu!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //Desafiante Vence
                    echo "<p>".($this->desafiante->getNome())." Venceu!</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        }
        else{
            echo "Luta não pode acontecer";
        }
    }
}
?>