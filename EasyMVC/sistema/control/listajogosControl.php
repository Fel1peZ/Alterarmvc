<?php
require_once("../model/listajogos.php");
require_once("../dao/listajogosDao.php");
class ListajogosControl {
    private $listajogos;
    private $acao;
    private $dao;
    public function __construct(){
       $this->listajogos=new Listajogos();
      $this->dao=new ListajogosDao();
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
        $this->listajogos->setId($_POST['id']);
		$this->listajogos->setTitulo($_POST['titulo']);
		$this->listajogos->setData_lancamento($_POST['data_lancamento']);
		$this->listajogos->setDiretor($_POST['diretor']);
		$this->listajogos->setImg($_POST['img']);
		$this->listajogos->setId_genero($_POST['id_genero']);
		$this->listajogos->setId_console($_POST['id_console']);
		
        $this->dao->inserir($this->listajogos);
    }
    function excluir(){
        $this->dao->excluir($_REQUEST['id']);
    }
    function alterar(){
        $this->listajogos->setId($_POST['id']);
		$this->listajogos->setTitulo($_POST['titulo']);
		$this->listajogos->setData_lancamento($_POST['data_lancamento']);
		$this->listajogos->setDiretor($_POST['diretor']);
		$this->listajogos->setImg($_POST['img']);
		$this->listajogos->setId_genero($_POST['id_genero']);
		$this->listajogos->setId_console($_POST['id_console']);
		
        $this->dao->alterar($_REQUEST['id'],$this->listajogos);
    
    }
    function buscarId(Listajogos $listajogos){}
    function buscaTodos(){}

}
new ListajogosControl();
?>