<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Crud jogos</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ecf0f1;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            font-weight: bold;
        }
        nav {
            background-color: #34495e;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li {
            position: relative;
        }
        nav > ul > li {
            margin-right: 20px;
        }
        nav a {
            display: block;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #2c3e50;
        }
        nav ul ul {
            display: none;
            position: absolute;
            background-color: #34495e;
            top: 50px;
            left: 0;
            min-width: 200px;
        }
        nav ul li:hover ul {
            display: block;
        }
        nav ul ul li {
            width: 100%;
        }
        main {
            padding: 30px;
        }
        main h1 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <header>
        [insira aqui o nome do sistema]
    </header>
    <nav>
        <ul>
            <li>
                <a href="#">Cadastros</a>
                <ul>
                    <li><a href='console.php'>Cadastro Console</a></li>
<li><a href='genero.php'>Cadastro Genero</a></li>
<li><a href='listajogos.php'>Cadastro Listajogos</a></li>

                </ul>
            </li>
            <li>
                <a href="#">Relatórios</a>
                <ul>
                    <li><a href='listaConsole.php'>Relatório Console</a></li>
<li><a href='listaGenero.php'>Relatório Genero</a></li>
<li><a href='listaListajogos.php'>Relatório Listajogos</a></li>

                </ul>
            </li>
        </ul>
    </nav>
    <main>
        <h1>Bem-vindo!</h1>
        <p>Esta é a área de conteúdo do sistema.</p>
    </main>
</body>
</html>