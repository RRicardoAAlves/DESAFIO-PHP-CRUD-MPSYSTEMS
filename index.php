<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="?page=index.php">Home</a></li>
                <li><a href="?page=cadastrar">Cadastrar aluno</a></li>
                <li><a href="?page=pesquisar">Pesquisar aluno</a></li>
            </ul>
        </nav>
    </header>

    <?php

    include("config.php");

    switch (@$_REQUEST["page"]) {
        case 'cadastrar':
            include("cadastro.php");
            break;
        case 'pesquisar':
            include("pesquisar.php");
            break;
        case 'editar':
            include("alterar.php");
            break;
        case 'salvar':
            include("salvar.php");
            break;

        default:
            
        print "<h1>Bem vindos!!!</h1>";

            break;
    }




    ?>

</body>

</html>