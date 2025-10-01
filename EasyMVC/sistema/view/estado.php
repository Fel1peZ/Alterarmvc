<html>
    <head>
        <title>Cadastro de estado</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/estadoControl.php?a=1" method="post">
        <h1>Cadastro de estado</h1>
            <label for='id'>id</label>
<input type='text' name='id'><br>
<label for='nomeEstado'>nomeEstado</label>
<input type='text' name='nomeEstado'><br>
<label for='sigla'>sigla</label>
<input type='text' name='sigla'><br>
<label for='regiao'>regiao</label>
<input type='text' name='regiao'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>