<?php
include('pg/cabecalho.php');


$pagina = (isset($_GET['pagina'])? $_GET['pagina'] :  'conteudo');
if (file_exists("pg/".$pagina.".php")) {
	include ("pg/".$pagina.".php");
}
else {

	include('pg/error404.php');
}


include('pg/rodape.php');