
<html>
    <head>
        <title>Lista de console</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
      <?php
      require_once("../dao/consoleDao.php");
   $dao=new consoleDAO();
   $dados=$dao->listaGeral();
    echo "<table border=1>";
    foreach($dados as $dado){
        echo "<tr>";
       echo "<td>{$dado['id_console']}</td>";
echo "<td>{$dado['nome_console']}</td>";
echo "<td>{$dado['fabricante']}</td>";
echo "<td>{$dado['ano_lancamento']}</td>";
echo "<td>{$dado['geracao']}</td>";
echo "<td>{$dado['preco_lancamento']}</td>";

       echo "<td>".
       "<a href='../control/consoleControl.php?id={$dado['id_console']}&a=2'> Excluir</a>".
       "</td>";
       echo "<td>".
       "<a href='../view/console.php?a=3'> Alterar</a>"."</td>";
       echo "</tr>";
    }
    echo "</table>";
     ?>  
    </body>
</html>