<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="./public/favicon/phone.ico">
        <title>tele agenda</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap">
        <link rel="stylesheet" type="text/css" href="./public/css/reset.css">
        <link rel="stylesheet" type="text/css" href="./public/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="./public/css/index.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./public/libs/bootstrap.min.css">
    </head>
    <body>
        <div class="main-div">
            <header>
                <div>
                    <div class="logo"></div>
                    <div class="main-nav">
                        <nav>
                            <a href="index.php?menuop=home">Home</a>
                            <a href="index.php?menuop=contatos">Contatos</a>
                            <a href="index.php?menuop=tarefas">Tarefas</a>
                            <a href="index.php?menuop=eventos">Eventos</a>
                        </nav>
                    </div>
                </div>
                <div></div>
            </header>
        </div>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./public/libs/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
    include("./db/conexao.php");
?>
<?php
    $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
    switch ($menuop) {
        case 'home':
            include("./paginas/home/home.php");
            break;
        case 'contatos':
            include("./paginas/contatos/contatos.php");
            break;
        case 'cad-contato':
            include("./paginas/contatos/cad-contato.php");
            break;
        case 'inserir-contato':
            include("./paginas/contatos/inserir-contato.php");
            break;
        case 'editar-contato':
            include("./paginas/contatos/editar-contato.php");
            break;
        case 'excluir-contato':
            include("./paginas/contatos/excluir-contato.php");
            break;
        case 'atualizar-contato':
            include("./paginas/contatos/atualizar-contato.php");
            break;
        case 'tarefas':
            include("./paginas/tarefas/tarefas.php");
            break;
        case 'eventos':
            include("./paginas/eventos/eventos.php");
            break;
        default:
            include("./paginas/home/home.php");
            break;
    }
?>
<?php
    include("./ui/main.php");
?>
<?php
    include("./ui/footer.php");
?>
