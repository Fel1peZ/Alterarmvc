
<html>
    <head>
        <title>Lista de cidade</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
      <?php
      require_once("../dao/cidadeDao.php");
   $dao=new cidadeDAO();
   $dados=$dao->listaGeral();
    echo "<table border=1>";
    foreach($dados as $dado){
        echo "<tr>";
       echo "<td>{$dado['id']}</td>";
echo "<td>{$dado['nomeCidade']}</td>";
echo "<td>{$dado['idEstado']}</td>";
echo "<td>{$dado['habitantes']}</td>";

       echo "<td>".
       "<a href='../control/cidadeControl.php?id={$dado['id']}&a=2'> Excluir</a>".
       "</td>";
       echo "<td>Alterar</td>";
       echo "</tr>";
    }
    echo "</table>";
     ?>  
    </body>
</html>