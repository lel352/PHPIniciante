<?php

require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao
{

   private $titulo;
   private $autor;
   private $totalPaginas;
   private $paginaAtual;
   private $aberto;
   private $leitor;

   public function __construct($titulo,$autor,$totalPaginas,$leitor){
       $this->setTitulo($titulo);
       $this->setAutor($autor);
       $this->setTotalPaginas($totalPaginas);
       $this->setLeitor($leitor);
       $this->setAberto(false); 
       $this->setPaginaAtual(0);
       
   }
   
   
   public function getTitulo(){
       return $this->titulo;
   }
   
   public function setTitulo($titulo){
       $this->titulo = $titulo;
   }
   
   public function getAutor(){
       return $this->autor;
   }
   
   public function setAutor($auto){
       $this->autor = $auto;
   }
   
   public function getTotalPaginas(){
       return $this->totalPaginas;
   }
   
   public function setTotalPaginas($totalPaginas){
       $this->totalPaginas = $totalPaginas;
   }
   
   public function getPaginaAtual(){
       return $this->paginaAtual;
   }
   
   public function setPaginaAtual($paginaAtual){
       $this->paginaAtual = $paginaAtual;
   }
   
   private function getAberto(){
        return $this->aberto;
   }
   
   private function setAberto($aberto){
        $this->aberto = $aberto;
   }

   public function getLeitor(){
       return $this->leitor;
   }
   
   public function setLeitor($leitor){
       $this->leitor = $leitor;
   }
    
   public function detalhes(){
       echo "<hr>Livro ".$this->getTitulo()." escrito por ".$this->getAutor();
       echo "<br>Paginas: ".$this->getTotalPaginas()." atual ".$this->getPaginaAtual();
       echo "<br>Sendo lindo por ".$this->getLeitor()->getNome();
   }
   
   public function abrir(){
       $this->setAberto(true);
   }
   
   public function fechar(){
       $this->setAberto(false);
   }
   
   public function folhear($pagina){
       if ($pagina > $this->getTotalPaginas()){
           $this->setPaginaAtual(0);
       }
       else{
           $this->setPaginaAtual($pagina);
       }
   }
   
   public function avancarPagina(){
       if ($this->getPaginaAtual()+1 <= $this->getTotalPaginas()){
          $this->setPaginaAtual($this->getPaginaAtual()+1);
       }
   }
   public function voltarPagina(){
       if ($this->getPaginaAtual()-1 >= 0){
           $this->setPaginaAtual($this->getPaginaAtual()-1);
       }
   }
}

?>