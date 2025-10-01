<?php
require_once("../model/console.php");
require_once("../dao/consoleDao.php");
class ConsoleControl {
    private $console;
    private $acao;
    private $dao;
    public function __construct(){
       $this->console=new Console();
      $this->dao=new ConsoleDao();
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
        $this->console->setId_console($_POST['id_console']);
		$this->console->setNome_console($_POST['nome_console']);
		$this->console->setFabricante($_POST['fabricante']);
		$this->console->setAno_lancamento($_POST['ano_lancamento']);
		$this->console->setGeracao($_POST['geracao']);
		$this->console->setPreco_lancamento($_POST['preco_lancamento']);
		
        $this->dao->inserir($this->console);
    }
    function excluir(){
        $this->dao->excluir($_REQUEST['id']);
    }
    function alterar(){
        $this->console->setId_console($_POST['id_console']);
		$this->console->setNome_console($_POST['nome_console']);
		$this->console->setFabricante($_POST['fabricante']);
		$this->console->setAno_lancamento($_POST['ano_lancamento']);
		$this->console->setGeracao($_POST['geracao']);
		$this->console->setPreco_lancamento($_POST['preco_lancamento']);
		
        $this->dao->alterar($_REQUEST['id'],$this->console);
    
    }
    function buscarId(Console $console){}
    function buscaTodos(){}

}
new ConsoleControl();
?>