<?php
class Console {
	private $id_console;
	private $nome_console;
	private $fabricante;
	private $ano_lancamento;
	private $geracao;
	private $preco_lancamento;

	function getId_console(){
		return $this->id_console;
	}
	function setId_console($id_console){
		$this->id_console=$id_console;
	}
	function getNome_console(){
		return $this->nome_console;
	}
	function setNome_console($nome_console){
		$this->nome_console=$nome_console;
	}
	function getFabricante(){
		return $this->fabricante;
	}
	function setFabricante($fabricante){
		$this->fabricante=$fabricante;
	}
	function getAno_lancamento(){
		return $this->ano_lancamento;
	}
	function setAno_lancamento($ano_lancamento){
		$this->ano_lancamento=$ano_lancamento;
	}
	function getGeracao(){
		return $this->geracao;
	}
	function setGeracao($geracao){
		$this->geracao=$geracao;
	}
	function getPreco_lancamento(){
		return $this->preco_lancamento;
	}
	function setPreco_lancamento($preco_lancamento){
		$this->preco_lancamento=$preco_lancamento;
	}

}
?>