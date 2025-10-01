<html>
    <head>
        <title><?= (isset($_GET['a']) && $_GET['a'] == 3) ? 'Alterar ' : 'Cadastro de ' ?> listajogos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
       <form action="<?= (isset($_GET['a']) && $_GET['a'] == 3) 
            ? '../control/listajogosControl.php?a=3' 
            : '../control/listajogosControl.php?a=1' ?>" method="post">

            <h1><?= (isset($_GET['a']) && $_GET['a'] == 3) ? 'Alterar ' : 'Cadastro de ' ?> listajogos</h1>
            <?php 
            require_once("../dao/listajogosDao.php");
            $obj = isset($_GET['id']) ? (new listajogosDao())->buscaPorId($_GET['id']) : []; 
            ?>
            <label for='id'>id</label>
<input type='text' name='id' value="<?php echo isset($obj['id']) ? $obj['id'] : ''; ?>">
<br>
<label for='titulo'>titulo</label>
<input type='text' name='titulo' value="<?php echo isset($obj['titulo']) ? $obj['titulo'] : ''; ?>">
<br>
<label for='data_lancamento'>data_lancamento</label>
<input type='text' name='data_lancamento' value="<?php echo isset($obj['data_lancamento']) ? $obj['data_lancamento'] : ''; ?>">
<br>
<label for='diretor'>diretor</label>
<input type='text' name='diretor' value="<?php echo isset($obj['diretor']) ? $obj['diretor'] : ''; ?>">
<br>
<label for='img'>img</label>
<input type='text' name='img' value="<?php echo isset($obj['img']) ? $obj['img'] : ''; ?>">
<br>
<label for='id_genero'>id_genero</label>
<input type='text' name='id_genero' value="<?php echo isset($obj['id_genero']) ? $obj['id_genero'] : ''; ?>">
<br>
<label for='id_console'>id_console</label>
<input type='text' name='id_console' value="<?php echo isset($obj['id_console']) ? $obj['id_console'] : ''; ?>">
<br>

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>