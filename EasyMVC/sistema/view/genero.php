<html>
    <head>
        <title><?= (isset($_GET['a']) && $_GET['a'] == 3) ? 'Alterar ' : 'Cadastro de ' ?> genero</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
       <form action="<?= (isset($_GET['a']) && $_GET['a'] == 3) 
            ? '../control/generoControl.php?a=3' 
            : '../control/generoControl.php?a=1' ?>" method="post">

            <h1><?= (isset($_GET['a']) && $_GET['a'] == 3) ? 'Alterar ' : 'Cadastro de ' ?> genero</h1>
            <?php 
            require_once("../dao/generoDao.php");
            $obj = isset($_GET['id']) ? (new generoDao())->buscaPorId($_GET['id']) : []; 
            ?>
            <label for='id_genero'>id_genero</label>
<input type='text' name='id_genero' value="<?php echo isset($obj['id_genero']) ? $obj['id_genero'] : ''; ?>">
<br>
<label for='nome_genero'>nome_genero</label>
<input type='text' name='nome_genero' value="<?php echo isset($obj['nome_genero']) ? $obj['nome_genero'] : ''; ?>">
<br>
<label for='descricao'>descricao</label>
<input type='text' name='descricao' value="<?php echo isset($obj['descricao']) ? $obj['descricao'] : ''; ?>">
<br>

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>