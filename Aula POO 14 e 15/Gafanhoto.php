<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa
{
   private $login; 
   private $totalAssistido;
   
   public function __construct($nome, $idade, $sexo, $login){
      parent::__construct($nome, $idade, $sexo);
      $this->login = $login;
      $this->totalAssistido = 0;
   }    
   
   private function getLogin(){
       return $this->login;
   }
   
   private function setLogin($login){
       $this->login = $login;
   }
   
   private function getTotalAssistido(){
       return $this->totalAssistido;
   }
   
   private function setTotalAssistido($totalAssistido){
       $this->totalAssistido = $totalAssistido;
   }
   
   public function viuMaisUm(){
      $this->totalAssistido ++;
   }
}
?>