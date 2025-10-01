<?php
require_once("../model/conexao.php");
class CidadeDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO cidade (id, nomeCidade, idEstado, habitantes) VALUES (?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id=$obj->getId();
$nomeCidade=$obj->getNomeCidade();
$idEstado=$obj->getIdEstado();
$habitantes=$obj->getHabitantes();

    $stmt->execute([$id,$nomeCidade,$idEstado,$habitantes]);
}
function listaGeral(){
    $sql = "select * from cidade";
    $query = $this->con->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}
function excluir($id){
    $sql = "delete from cidade where id=$id";
    $query = $this->con->query($sql);
    header("Location:../view/listaCidade.php");
}
}
?>