<?php
require_once("../model/conexao.php");
class ConsoleDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO console (id_console, nome_console, fabricante, ano_lancamento, geracao, preco_lancamento) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id_console=$obj->getId_console();
$nome_console=$obj->getNome_console();
$fabricante=$obj->getFabricante();
$ano_lancamento=$obj->getAno_lancamento();
$geracao=$obj->getGeracao();
$preco_lancamento=$obj->getPreco_lancamento();

    $stmt->execute([$id_console,$nome_console,$fabricante,$ano_lancamento,$geracao,$preco_lancamento]);
}
function listaGeral(){
    $sql = "select * from console";
    $query = $this->con->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}
function excluir($id){
    $sql = "delete from console where id_console=$id";
    $query = $this->con->query($sql);
    header("Location:../view/listaConsole.php");
}

function alterar($id,$obj){
    $sql = "update console set nome_console=?, fabricante=?, ano_lancamento=?, geracao=?, preco_lancamento=?  where id_console=$id";
    $stmt = $this->con->prepare($sql);
    $nome_console=$obj->getNome_console();
$fabricante=$obj->getFabricante();
$ano_lancamento=$obj->getAno_lancamento();
$geracao=$obj->getGeracao();
$preco_lancamento=$obj->getPreco_lancamento();

    $stmt->execute([$nome_console,$fabricante,$ano_lancamento,$geracao,$preco_lancamento]);
    header("Location:../view/listaConsole.php");
}
}
?>