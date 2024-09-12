<?php
include("./db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCADORA DEV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <header class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">LOCADORA DEV</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php?menu=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menu=videos">Vídeos</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menu=categorias">Categorias</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menu=clientes">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menu=locacao">Locação</a></li>
                    </ul>
                </div>
            </div>

        </nav>

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
            case "editar-videos":
                include("editar-videos.php");
                break;
            case "atualizar-videos":
                include("atualizar-videos.php");
                break;
            case "excluir-videos":
                include("excluir-videos.php");
                break;
            case "categorias":
                include("lista-categorias.php");
                break;
            case "cad-categoria":
                include("cad-categorias.php");
                break;
            case "inserir-categorias":
                include("inserir-categorias.php");
                break;
            case "editar-categorias":
                include("editar-categorias.php");
                break;
            case "atualizar-categorias":
                include("atualizar-categorias.php");
                break;
            case "excluir-categorias":
                include("excluir-categorias.php");
                break;
            case "excluir-clientes":
                include("excluir-clientes.php");
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>