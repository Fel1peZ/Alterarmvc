<html>
    <head>
        <title>Lista de listajogos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
      <?php
      require_once("../dao/listajogosDao.php");
      $dao = new listajogosDAO();
      $dados = $dao->listaGeral();
      echo "<table border=1>";
      foreach($dados as $dado){
          echo "<tr>";
          echo "<td>{$dado['id']}</td>";
echo "<td>{$dado['titulo']}</td>";
echo "<td>{$dado['data_lancamento']}</td>";
echo "<td>{$dado['diretor']}</td>";
echo "<td>{$dado['img']}</td>";
echo "<td>{$dado['id_genero']}</td>";
echo "<td>{$dado['id_console']}</td>";

          echo "<td>".
            "<a href='../control/listajogosControl.php?id={$dado['id']}&a=2'>Excluir</a>".
          "</td>";
          echo "<td>".
            "<a href='../view/listajogos.php?a=3&id={$dado['id']}'>Alterar</a>".
          "</td>";
          echo "</tr>";
      }
      echo "</table>";
      ?>  
    </body>
</html>