<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/topo.css">
    <link  rel="stylesheet" href="css/rodape.css">
    <script type="text/javascript" src="js/javascript.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
</head>
<body>
<header>
    <a href="index.php"><img src="imagens/logo.gif" onclick="" class="logo"></a>
    <button  class="btnCliente">
        <img src="imagens/areaClienteIcon.png" alt="">
        <span id="txtBtn">Área Cliente</span>
    </button>
    <nav id="nav">
        <div class="navigation" id="navigation">
            <ul id="ul">
                <li><a href="index.php">Ínicio</a></li>
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
                        <li class="submenu"><a href="internet.php">Internet</a></li>
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
                <img src="imagens/user42.png" alt="">
            </button>
        </div>
    </nav>
</header>

<!-- Conteudo -->
<img src="imagens/bg-topo-2pagina.png"/>
<img src="imagens/bg-topo-2pagina.png"/>
<img src="imagens/bg-topo-2pagina.png"/>
<img src="imagens/bg-topo-2pagina.png"/>
<img src="imagens/bg-topo-2pagina.png"/>
<img src="imagens/bg-topo-2pagina.png"/>
<img src="imagens/bg-topo-2pagina.png"/>

<!-- footer -->
<div id="footer">
    <footer>
        <nav id="footerMenu">
            <ul>
                <li class="li1"><img src="imagens/logoSemNome.png" id="logoSemNome"></li>
                <li class="li1"><a id="home" href="#" class="link">Home</a></li>
                <li class="li1"><a id="empresa" href="#" class="link">A empresa</a>
                    <ul class="submenu">
                        <li><a class="subLink">submenu</a></li>
                        <li><a class="subLink">submenu</a></li>
                        <li><a class="subLink">submenu</a></li>
                    </ul>
                </li>

                <li class="li1"><a id="cobertura" href="#" class="link">Cobertura</a></li>
                <li class="li1"><a id="assinatura" href="#" class="link">Assinaturas</a></li>
                <li class="li1"><a id="contato" href="#">Contato</a></li>
            </ul>
        </nav>

        <div id="abaDireitos">
            <p class="direitos">Copyright 2015 Connect<span id="spanDireitos"> - Alguns direitos reservados.</span></p>
        </div>
    </footer>
</div>
</body>
</html>