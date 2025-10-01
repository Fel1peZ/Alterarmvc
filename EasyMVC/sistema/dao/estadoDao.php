<?php
require_once("../model/conexao.php");
class EstadoDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO estado (id, nomeEstado, sigla, regiao) VALUES (?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id=$obj->getId();
$nomeEstado=$obj->getNomeEstado();
$sigla=$obj->getSigla();
$regiao=$obj->getRegiao();

    $stmt->execute([$id,$nomeEstado,$sigla,$regiao]);
}
function listaGeral(){
    $sql = "select * from estado";
    $query = $this->con->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}
function excluir($id){
    $sql = "delete from estado where id=$id";
    $query = $this->con->query($sql);
    header("Location:../view/listaEstado.php");
}
}
?>