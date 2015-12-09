<?php
include('cabecalho.php');


$pagina = (isset($_GET['pagina'])? $_GET['pagina'] :  'conteudo');

if (file_exists($pagina.".php")) {
	include ($pagina.".php");
}
else {
	include('error404.php');
}


include('rodape.php');