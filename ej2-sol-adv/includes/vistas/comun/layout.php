<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= RUTA_CSS.'/estilo.css'?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title><?= $tituloPagina ?></title>
</head>
<body>
<div id="contenedor">
<?php

require('cabecera.php');
require('sidebarIzq.php');

?>
<main>
	<article>
		<?= $contenidoPrincipal ?>
	</article>
</main>
<?php

require('sidebarDer.php');
require('pie.php');

?>
</div>
<script src='/ej2-sol-adv/js/emailval.js'></script>
</body>
</html>