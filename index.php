<?php

namespace blog;

use blog\model\ArtigoDAO;

include 'model/ArtigoDAO.php';
include 'config.php';

$artigo = new ArtigoDAO($mysql);
$artigos = $artigo->getArtigos();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>Meu Blog</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="container">
		<h1>Meu Blog</h1>
		<?php foreach ($artigos as $artigo) : ?>

			<h2>
			<a href="artigo.php?id=<?php echo $artigo['id']?>">
			<?php echo $artigo['titulo'] ?></a>
		</h2>

		<p><?php echo $artigo['conteudo'] ?></p>

		<?php endforeach; ?>
	</div>
</body>

</html>