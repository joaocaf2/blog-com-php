<?php

require '../config.php';
require '../model/ArtigoDAO.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $artigoDAO = new ArtigoDAO($mysql);
    if (!(empty($_POST['titulo']) || empty($_POST['conteudo']))) {
        $artigoDAO->insere($_POST['titulo'], $_POST['conteudo']);
        header("location: adicionar-artigo.php"); // Adiciona um cabeçalho de redirect.
        die(); // Interrompe a execução do código
    }

}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Adicionar Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Adicionar Artigo</h1>
        <form action="adicionar-artigo.php" method="post">
            <p>
                <label for="">Digite o título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" />
            </p>
            <p>
                <label for="">Digite o conteúdo do artigo</label>
                <textarea class="campo-form" type="text" name="conteudo" id="conteudo"></textarea>
            </p>
            <p>
                <button class="botao">Criar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>