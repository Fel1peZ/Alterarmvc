<html>
    <head>
        <title><?= (isset($_GET['a']) && $_GET['a'] == 3) ? 'Alterar ' : 'Cadastro de ' ?> console</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
       <form action="<?= (isset($_GET['a']) && $_GET['a'] == 3) 
            ? '../control/consoleControl.php?a=3' 
            : '../control/consoleControl.php?a=1' ?>" method="post">

            <h1><?= (isset($_GET['a']) && $_GET['a'] == 3) ? 'Alterar ' : 'Cadastro de ' ?> console</h1>
            <?php 
            require_once("../dao/consoleDao.php");
            $obj = isset($_GET['id']) ? (new consoleDao())->buscaPorId($_GET['id']) : []; 
            ?>
            <label for='id_console'>id_console</label>
<input type='text' name='id_console' value="<?php echo isset($obj['id_console']) ? $obj['id_console'] : ''; ?>">
<br>
<label for='nome_console'>nome_console</label>
<input type='text' name='nome_console' value="<?php echo isset($obj['nome_console']) ? $obj['nome_console'] : ''; ?>">
<br>
<label for='fabricante'>fabricante</label>
<input type='text' name='fabricante' value="<?php echo isset($obj['fabricante']) ? $obj['fabricante'] : ''; ?>">
<br>
<label for='ano_lancamento'>ano_lancamento</label>
<input type='text' name='ano_lancamento' value="<?php echo isset($obj['ano_lancamento']) ? $obj['ano_lancamento'] : ''; ?>">
<br>
<label for='geracao'>geracao</label>
<input type='text' name='geracao' value="<?php echo isset($obj['geracao']) ? $obj['geracao'] : ''; ?>">
<br>
<label for='preco_lancamento'>preco_lancamento</label>
<input type='text' name='preco_lancamento' value="<?php echo isset($obj['preco_lancamento']) ? $obj['preco_lancamento'] : ''; ?>">
<br>

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>