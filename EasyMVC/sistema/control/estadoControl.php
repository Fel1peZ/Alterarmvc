<?php
require_once("../model/estado.php");
require_once("../dao/estadoDao.php");
class EstadoControl {
    private $estado;
    private $acao;
    private $dao;
    public function __construct(){
       $this->estado=new Estado();
      $this->dao=new EstadoDao();
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
          break;
       }
    }
  
    function inserir(){
        $this->estado->setId($_POST['id']);
		$this->estado->setNomeEstado($_POST['nomeEstado']);
		$this->estado->setSigla($_POST['sigla']);
		$this->estado->setRegiao($_POST['regiao']);
		
        $this->dao->inserir($this->estado);
    }
    function excluir(){
        $this->dao->excluir($_REQUEST['id']);
    }
    function alterar(){}
    function buscarId(Estado $estado){}
    function buscaTodos(){}

}
new EstadoControl();
?>