<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador
{
    //Atributos  
    private $volume;
    private $ligado;
    private $tocando;
    private $menuAberto;

    //Construtor
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
        $this->menuAberto = false;
    }
    
    //Métodos gets e sets
    private function getVolume(){
        return $this->volume;
    }
    
    private function setVolume($volume){
        $this->volume = $volume;
    }
    
    private function getLigado(){
        return $this->ligado;
    }
    
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }    
    
    private function getTocando(){
        return $this->tocaando;
    }
    
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }        
    
    public function ligar(){
        $this->setLigado(true);
    }
    
    public function desligar(){
        $this->setLigado(false);
    }
    
    public function abrirMenu(){
        if ($this->getLigado()){
            echo "<p>------------Menu-------------</p>";
            echo "<br>Está Ligado?: ".($this->getLigado()?"Sim":"Não");
            echo "<br>Está Tocando?: ".($this->getTocando()?"Sim":"Não");
            echo "<br>Volume: ".$this->getVolume();
            echo "<br>";
            for ($i = 0; $i < $this->getVolume(); $i+=10) {
                 echo "|";
            }
            echo "<br>";
            $this->menuAberto = true;
        }else{
            echo "<p>Erro! Não posso Abrir Menu!</p>";
        }
        
    }
    
    public function fecharMenu(){
        if (($this->getLigado()) && ($this->menuAberto)){
            echo "<br>Fechando Menu...";
            $this->menuAberto = false;
        }else{
            echo "<p>Erro! Não posso Fechar Menu!</p>";
        }
    }
    
    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume()+1);
        }
        else{
            echo "<p>Erro! Não posso Aumentar volume!</p>";
        }
    }
    
    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume()-1);
        }
        
        else{
            echo "<p>Erro! Não posso Diminuir volume!</p>";
        }
    }
    
    public function ligarMudo(){
        if (($this->getLigado()) && ($this->getVolume() > 0)){
            $this->setVolume(0);
        }
    }
    
    public function desligarMudo(){
        if (($this->getLigado()) && ($this->getVolume() == 0)){
            $this->setVolume(50);
        }
    }
    
    public function play(){
        if (($this->getLigado()) && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    
    public function pause(){
        if (($this->getLigado()) && ($this->getTocando())){
            $this->setTocando(false);
        }
    }
}
?>