<?php
require_once("../model/conexao.php");
class ListajogosDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO listajogos (id, titulo, data_lancamento, diretor, img, id_genero, id_console) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id=$obj->getId();
$titulo=$obj->getTitulo();
$data_lancamento=$obj->getData_lancamento();
$diretor=$obj->getDiretor();
$img=$obj->getImg();
$id_genero=$obj->getId_genero();
$id_console=$obj->getId_console();

    $stmt->execute([$id,$titulo,$data_lancamento,$diretor,$img,$id_genero,$id_console]);
}
function listaGeral(){
    $sql = "select * from listajogos";
    $query = $this->con->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}
function excluir($id){
    $sql = "delete from listajogos where id=$id";
    $query = $this->con->query($sql);
    header("Location:../view/listaListajogos.php");
}

function alterar($id,$obj){
    $sql = "update listajogos set titulo=?, data_lancamento=?, diretor=?, img=?, id_genero=?, id_console=?  where id=$id";
    $stmt = $this->con->prepare($sql);
    $titulo=$obj->getTitulo();
$data_lancamento=$obj->getData_lancamento();
$diretor=$obj->getDiretor();
$img=$obj->getImg();
$id_genero=$obj->getId_genero();
$id_console=$obj->getId_console();

    $stmt->execute([$titulo,$data_lancamento,$diretor,$img,$id_genero,$id_console]);
    header("Location:../view/listaListajogos.php");
}
}
?>