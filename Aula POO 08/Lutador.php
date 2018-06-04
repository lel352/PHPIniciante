<?php
require_once 'InterfaceLutador.php';

class Lutador implements InterfaceLutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
       $this->setNome($nome); 
       $this->setNacionalidade($nacionalidade);
       $this->setIdade($idade);
       $this->setAltura($altura);
       $this->setPeso($peso);
       $this->setVitorias($vitorias);
       $this->setDerrotas($derrotas);
       $this->setEmpates($empates);
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
         $this->nome = $nome;
    }
    
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    
    public function setNacionalidade($nacionalidade){
         $this->nacionalidade = $nacionalidade;
    }
    
    public function getIdade(){
        return $this->idade;
    }
    
    public function setIdade($idade){
         $this->idade = $idade;
    }
    
    public function getAltura(){
        return $this->altura;
    }
    
    public function setAltura($altura){
         $this->altura = $altura;
    }
    
    public function getPeso(){
        return $this->peso;
    }
    
    public function setPeso($peso){
         $this->peso = $peso;
         $this->setCategoria();
    }
    
    public function getCategoria(){
        return $this->categoria;
    }
    
    private function setCategoria(){
        if ($this->peso<5.2){
            $this->categoria = "Inválido";
        }
        elseif ($this->peso <= 70.3){
            $this->categoria = "Leve";
        }
        elseif ($this->peso <= 83.9){
            $this->categoria = "Médio";
        }
        elseif ($this->peso <= 120.2){
            $this->categoria = "Pesso";
        }
        else
           $this->categoria = "Inválido";
    }
    
    public function getVitorias(){
        return $this->vitorias;
    }
    
    public function setVitorias($vitorias){
         $this->vitorias = $vitorias;
    }    
    
    public function getDerrotas(){
        return $this->derrotas;
    }
    
    public function setDerrotas($derrotas){
         $this->derrotas = $derrotas;
    }        
    
    public function getEmpates(){
        return $this->empates;
    }
    
    public function setEmpates($empates){
         $this->empates = $empates;
    }         
    
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }
    
    public function apresentar(){
        echo "<p>-----------------------------------------</p>";
        echo "<p>Chegou a Hora o Lutador ".($this->getNome());
        echo " Veio diretamente de ".($this->getNacionalidade());
        echo ", tem ".($this->getIdade())." anos e pesa ".($this->getPeso())." kg";
        echo "<br>tem ".($this->getVitorias())." vitórias, ";
        echo  ($this->getDerrotas())." derrotas e ".($this->getEmpates())." empates</p>";
    }
    
    public function status(){
        echo "<p>-----------------------------------------</p>"; 
        echo "<p>".($this->getNome())." é um peso ".($this->getCategoria());
        echo " e já ganhou ".($this->getVitorias())." vezes,";
        echo " perdeu ".($this->getDerrotas())." vezes e ";
        echo " empatou ".($this->getEmpates())." vezes!</p>";
    }
    
}
?>