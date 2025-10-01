<?php
class Genero {
	private $id_genero;
	private $nome_genero;
	private $descricao;

	function getId_genero(){
		return $this->id_genero;
	}
	function setId_genero($id_genero){
		$this->id_genero=$id_genero;
	}
	function getNome_genero(){
		return $this->nome_genero;
	}
	function setNome_genero($nome_genero){
		$this->nome_genero=$nome_genero;
	}
	function getDescricao(){
		return $this->descricao;
	}
	function setDescricao($descricao){
		$this->descricao=$descricao;
	}

}
?>