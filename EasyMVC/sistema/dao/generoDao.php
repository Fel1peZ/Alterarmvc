<?php
require_once("../model/conexao.php");
class GeneroDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO genero (id_genero, nome_genero, descricao) VALUES (?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id_genero=$obj->getId_genero();
$nome_genero=$obj->getNome_genero();
$descricao=$obj->getDescricao();

    $stmt->execute([$id_genero,$nome_genero,$descricao]);
}
function listaGeral(){
    $sql = "select * from genero";
    $query = $this->con->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}
function excluir($id){
    $sql = "delete from genero where id_genero=$id";
    $query = $this->con->query($sql);
    header("Location:../view/listaGenero.php");
}

function alterar($id,$obj){
    $sql = "update genero set nome_genero=?, descricao=?  where id_genero=$id";
    $stmt = $this->con->prepare($sql);
    $nome_genero=$obj->getNome_genero();
$descricao=$obj->getDescricao();

    $stmt->execute([$nome_genero,$descricao]);
    header("Location:../view/listaGenero.php");
}
}
?>