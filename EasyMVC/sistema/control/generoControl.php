<?php
require_once("../model/genero.php");
require_once("../dao/generoDao.php");
class GeneroControl {
    private $genero;
    private $acao;
    private $dao;
    public function __construct(){
       $this->genero=new Genero();
      $this->dao=new GeneroDao();
      $this->acao=$_GET["a"];
      $this->verificaAcao(); 
    }
    function verificaAcao(){
       switch($this->acao){
          case 1:
            $this->inserir();
          break;
          case 2:
            $this->excluir();
          case 3:
            $this->alterar();
          break;
       }
    }
  
    function inserir(){
        $this->genero->setId_genero($_POST['id_genero']);
		$this->genero->setNome_genero($_POST['nome_genero']);
		$this->genero->setDescricao($_POST['descricao']);
		
        $this->dao->inserir($this->genero);
    }
    function excluir(){
        $this->dao->excluir($_REQUEST['id']);
    }
    function alterar(){
        $this->genero->setId_genero($_POST['id_genero']);
		$this->genero->setNome_genero($_POST['nome_genero']);
		$this->genero->setDescricao($_POST['descricao']);
		
        $this->dao->alterar($_REQUEST['id'],$this->genero);
    
    }
    function buscarId(Genero $genero){}
    function buscaTodos(){}

}
new GeneroControl();
?>