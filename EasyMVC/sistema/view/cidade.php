<html>
    <head>
        <title>Cadastro de cidade</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/cidadeControl.php?a=1" method="post">
        <h1>Cadastro de cidade</h1>
            <label for='id'>id</label>
<input type='text' name='id'><br>
<label for='nomeCidade'>nomeCidade</label>
<input type='text' name='nomeCidade'><br>
<label for='idEstado'>idEstado</label>
<input type='text' name='idEstado'><br>
<label for='habitantes'>habitantes</label>
<input type='text' name='habitantes'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>