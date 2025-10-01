
<html>
    <head>
        <title><?= (isset($_GET['a']) && $_GET['a'] == 3) ? 'Alterar ' : 'Cadastro de' ?> console</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
       <form action="<?= (isset($_GET['a']) && $_GET['a'] == 3) 
    ? '../control/consoleControl.php?a=3' 
    : '../control/consoleControl.php?a=1' ?>" method="post">
        <h1><?= (isset($_GET['a']) && $_GET['a'] == 3) ? 'Alterar ' : 'Cadastro de' ?> console</h1>
            <label for='id_console'>id_console</label>
<input type='text' name='id_console' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['id_console'] : '' ?>><br>
<label for='nome_console'>nome_console</label>
<input type='text' name='nome_console' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['nome_console'] : '' ?>><br>
<label for='fabricante'>fabricante</label>
<input type='text' name='fabricante' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['fabricante'] : '' ?>><br>
<label for='ano_lancamento'>ano_lancamento</label>
<input type='text' name='ano_lancamento' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['ano_lancamento'] : '' ?>><br>
<label for='geracao'>geracao</label>
<input type='text' name='geracao' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['geracao'] : '' ?>><br>
<label for='preco_lancamento'>preco_lancamento</label>
<input type='text' name='preco_lancamento' value=<?php //(isset($_GET['a']) && $_GET['a'] == 3) ? $_POST['preco_lancamento'] : '' ?>><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>