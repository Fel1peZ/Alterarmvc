
<html>
    <head>
        <title>Lista de estado</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
      <?php
      require_once("../dao/estadoDao.php");
   $dao=new estadoDAO();
   $dados=$dao->listaGeral();
    echo "<table border=1>";
    foreach($dados as $dado){
        echo "<tr>";
       echo "<td>{$dado['id']}</td>";
echo "<td>{$dado['nomeEstado']}</td>";
echo "<td>{$dado['sigla']}</td>";
echo "<td>{$dado['regiao']}</td>";

       echo "<td>".
       "<a href='../control/estadoControl.php?id={$dado['id']}&a=2'> Excluir</a>".
       "</td>";
       echo "<td>Alterar</td>";
       echo "</tr>";
    }
    echo "</table>";
     ?>  
    </body>
</html>