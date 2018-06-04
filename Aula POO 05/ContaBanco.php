<?php
class ContaBanco{
    public $numeroConta;
    protected $tipo;
    private $nomeDono;
    private $saldo;
    private $status;
    
    public function __construct(){
        $this->saldo = 0;
        $this->status = false;
        echo "<p> Conta Criada com sucesso! </p>";
    }
    
    
    public function getNumeroConta(){
        return $this->numeroConta;
    }
    
    public function setNumeroConta($numeroConta){
        $this->numeroConta = $numeroConta;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
    
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
    public function getNomeDono(){
        return $this->nomeDono;
    }
    
    public function setNomeDono($nomeDono){
        $this->nomeDono = $nomeDono;
    } 
    
    public function getSaldo(){
        return $this->saldo;
    }
    
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    
    public function getStatus(){
        return $this->status;
    }
    
    public function setStatus($status){
        $this->status = $status;
    }    
    
    public function abrirConta($tipoConta){
        $this->setTipo($tipoConta);
        $this->setStatus(true);
        if ($tipoConta == "CC"){
           $this->setSaldo(50);
        }elseif ($tipoConta == "CP") {
           $this->setSaldo(150);
        }   
    }
    
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "<p>Conta com dinheiro, não pode fechar! </p>";
        }
        elseif ($this->getSaldo() < 0){
            echo "<p>Conta em debito, não pode encerrar! </p>";
        }
        else{ 
           $this->setStatus(false);
            echo "<p>Conta de ".$this->getNomeDono()." fechada com sucesso! </p>";
        }   
    }
    
    public function depositar($valor){
        if ($this->getStatus()){
           $this->setSaldo($this->getSaldo() + $valor);
           echo "<p> deposito de R$ $valor autorizado na conta de ".$this->getNomeDono()."</p>";
        }   
        else
          echo "<p>Erro! Conta fechada, Impossivel Depositar!</p>";
    }
    
    public function sacar($valor){
        if ($this->getStatus()){
            if  ($this->getSaldo() >= $valor) {
              $this->setSaldo($this->getSaldo() - $valor);
              echo "<p> Saque de R$ $valor autorizado na conta de ".$this->getNomeDono()."</p>";
            }
            else
              echo "<p> Saldo Insuficinete para sacar! </p>";
        }
        else
          echo "</p> Erro! Conta inativa, Impossivel Sacar! </p>";
    }
    
    public function pagarMensalidade(){
        if ($this->getStatus()){
           $valor = 0;
           if ($this->getTipo() == "CC")
              $valor = 12;
           else if ($this->getTipo() == "CP")
              $valor = 20;
        
            if  ($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo()-$valor); 
                echo "<p> Mensalidade de R$ $valor debitada na conta de ".$this->getNomeDono()."</p>";
            }
            else
            echo "Saldo Insuficinete, para cobrar!";
        }
        else
          echo "Erro! Conta inativa, não pode cobrar!";
        
    }
}
?>