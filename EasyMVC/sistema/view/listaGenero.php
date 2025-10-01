<html>
    <head>
        <title>Lista de genero</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
      <?php
      require_once("../dao/generoDao.php");
      $dao = new generoDAO();
      $dados = $dao->listaGeral();
      echo "<table border=1>";
      foreach($dados as $dado){
          echo "<tr>";
          echo "<td>{$dado['id_genero']}</td>";
echo "<td>{$dado['nome_genero']}</td>";
echo "<td>{$dado['descricao']}</td>";

          echo "<td>".
            "<a href='../control/generoControl.php?id={$dado['id_genero']}&a=2'>Excluir</a>".
          "</td>";
          echo "<td>".
            "<a href='../view/genero.php?a=3&id={$dado['id_genero']}'>Alterar</a>".
          "</td>";
          echo "</tr>";
      }
      echo "</table>";
      ?>  
    </body>
</html>