<?php
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
		<p>Minha amiga que possui um clube de assinaturas começou a utilizar o
			Growth Hacking após conhecer um pouco mais sobre ele.</p>
	</div>
</body>

</html>