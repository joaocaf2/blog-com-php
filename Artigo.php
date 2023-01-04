<?php

use blog\model\ArtigoDAO;

require 'config.php';
require 'model/ArtigoDAO.php';



$artigoDAO = new ArtigoDAO($mysql);
$artigo = $artigoDAO->findById($_GET['id']);
?>


<!DOCTYPE html>


<html lang="pt-br">


<head>
<title>Artigo</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="container">
		<h1><?php echo $artigo['titulo'] ?></h1>
		<p><?php echo $artigo['conteudo'] ?></p>
		<a class="botao botao-block" href="index.php">Voltar</a>
	</div>
</body>

</html>