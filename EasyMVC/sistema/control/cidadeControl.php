<?php
require_once("../model/cidade.php");
require_once("../dao/cidadeDao.php");
class CidadeControl {
    private $cidade;
    private $acao;
    private $dao;
    public function __construct(){
       $this->cidade=new Cidade();
      $this->dao=new CidadeDao();
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
        $this->cidade->setId($_POST['id']);
		$this->cidade->setNomeCidade($_POST['nomeCidade']);
		$this->cidade->setIdEstado($_POST['idEstado']);
		$this->cidade->setHabitantes($_POST['habitantes']);
		
        $this->dao->inserir($this->cidade);
    }
    function excluir(){
        $this->dao->excluir($_REQUEST['id']);
    }
    function alterar(){}
    function buscarId(Cidade $cidade){}
    function buscaTodos(){}

}
new CidadeControl();
?>