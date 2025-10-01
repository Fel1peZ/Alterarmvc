
<html>
    <head>
        <title><?= (isset($_GET['a']) && $_GET['a'] == 3) ? 'Alterar ' : 'Cadastro de' ?> listajogos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
       <form action="<?= (isset($_GET['a']) && $_GET['a'] == 3) 
    ? '../control/listajogosControl.php?a=3' 
    : '../control/listajogosControl.php?a=1' ?>" method="post">
        <h1><?= (isset($_GET['a']) && $_GET['a'] == 3) ? 'Alterar ' : 'Cadastro de' ?> listajogos</h1>
            <label for='id'>id</label>
<input type='text' name='id' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['id'] : '' ?>><br>
<label for='titulo'>titulo</label>
<input type='text' name='titulo' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['titulo'] : '' ?>><br>
<label for='data_lancamento'>data_lancamento</label>
<input type='text' name='data_lancamento' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['data_lancamento'] : '' ?>><br>
<label for='diretor'>diretor</label>
<input type='text' name='diretor' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['diretor'] : '' ?>><br>
<label for='img'>img</label>
<input type='text' name='img' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['img'] : '' ?>><br>
<label for='id_genero'>id_genero</label>
<input type='text' name='id_genero' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['id_genero'] : '' ?>><br>
<label for='id_console'>id_console</label>
<input type='text' name='id_console' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['id_console'] : '' ?>><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>