<?php
    include("./db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCADORA DEV</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <header>
        <h1>LOCADORA DEV</h1>
        <ul>
            <li><a href="index.php?menu=home">Home</a></li>
            <li><a href="index.php?menu=videos">Vídeos</a></li>
            <li><a href="index.php?menu=categorias">Categorias</a></li>
            <li><a href="index.php?menu=clientes">Clientes</a></li>
            <li><a href="index.php?menu=locacao">Locação</a></li>

        </ul>
    </header>
    <main>
        <?php
        if (isset($_GET["menu"])) {
            $menu = $_GET["menu"];
        } else {
            $menu = "";
        }

        switch ($menu) {
            case "home":
                include("home.php");
                break;
            case "videos":
                include("lista-videos.php");
                break;
            case "cad-videos":
                include("cad-videos.php");
                break;
            case "inserir-videos":
                include("inserir-videos.php");
                break;
            case "categorias":
                include("lista-categorias.php");
                break;
            case "clientes":
                include("lista-clientes.php");
                break;
            case "locacao":
                include("locacao.php");
                break;
            default:
                include("home.php");
        }
        ?>
    </main>
</body>

</html>