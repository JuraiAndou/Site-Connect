
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/topo.css">
    <link  rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/internet.css">
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <!--Slider links-->
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <link rel="stylesheet" href="css/slider.css"/>
</head>
<body>


<header>
    <a href="index.php?pagina=conteudo"><img src="imagens/logo.gif" alt="" class="logo"></a>
    <button  class="btnCliente">
        <img src="imagens/areaClienteIcon.png" alt="">
        <span id="txtBtn">Área Cliente</span>
    </button>
    <nav id="nav">
        <div class="navigation" id="navigation">
            <ul id="ul">
                <li><a href="index.php?pagina=conteudo" >Ínicio</a></li>
                <li  id="btn">
                    <a href="#">Empresa<span class="arrow-down"></span></a>
                    <ul class="dropdown" id="dropdown">
                        <li class="submenu"><a href="">Teste</a></li>
                        <li class="submenu"><a href="">Teste</a></li>
                        <li class="submenu"><a href="">Teste</a></li>
                    </ul>
                </li>
                <li  id="btn2">
                    <a href="#">Internet<span class="arrow-down"></span></a>
                    <ul class="dropdown" id="dropdown2">
                        <li class="submenu"><a href="index.php?pagina=internet">Internet</a></li>
                        <li class="submenu"><a href="">Teste</a></li>
                        <li class="submenu"><a href="">Teste</a></li>
                    </ul>
                </li>
                <li><a href="#" tabindex="1">Cobertura</a></li>
                <li><a href="#" tabindex="1">Assinaturas</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
        <div class="nav_bg">
            <div class="nav_bar"> <span></span> <span></span> <span></span> </div>
            <button class="btnAreaCliente">
                <img src="../imagens/user42.png" alt="">
            </button>
        </div>
    </nav>
</header>