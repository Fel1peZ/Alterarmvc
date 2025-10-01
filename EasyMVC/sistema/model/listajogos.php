<?php
class Listajogos {
	private $id;
	private $titulo;
	private $data_lancamento;
	private $diretor;
	private $img;
	private $id_genero;
	private $id_console;

	function getId(){
		return $this->id;
	}
	function setId($id){
		$this->id=$id;
	}
	function getTitulo(){
		return $this->titulo;
	}
	function setTitulo($titulo){
		$this->titulo=$titulo;
	}
	function getData_lancamento(){
		return $this->data_lancamento;
	}
	function setData_lancamento($data_lancamento){
		$this->data_lancamento=$data_lancamento;
	}
	function getDiretor(){
		return $this->diretor;
	}
	function setDiretor($diretor){
		$this->diretor=$diretor;
	}
	function getImg(){
		return $this->img;
	}
	function setImg($img){
		$this->img=$img;
	}
	function getId_genero(){
		return $this->id_genero;
	}
	function setId_genero($id_genero){
		$this->id_genero=$id_genero;
	}
	function getId_console(){
		return $this->id_console;
	}
	function setId_console($id_console){
		$this->id_console=$id_console;
	}

}
?>