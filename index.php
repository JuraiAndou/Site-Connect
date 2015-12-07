<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/topo.css">
    <link  rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <!--Slider links-->
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <link rel="stylesheet" href="css/slider.css"/>
</head>
<body>
<header>
    <a href="index.php"><img src="imagens/logo.gif" alt="" class="logo"></a>
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
<!--Conteúdo-->
<div class="box">
    <span class="pager"></span>

    <div class="slider">
        <div class="slider-item">
            <p>
                A certificação de metodologias que nos auxiliam a lidar com o aumento do diálogo entre os diferentes
                setores produtivos representa uma abertura para a melhoria do remanejamento dos quadros funcionais.
            </p>
            <img src="imagens/bg-topo-2pagina.png"/></div>
        <div class="slider-item">
            <p>          A certificação de metodologias que nos auxiliam a lidar com a determinação clara de objetivos
                acarreta um processo de reformulação e modernização dos procedimentos normalmente adotados. Acima de tudo,
                é fundamental ressaltar que a contínua expansão de nossa atividade assume importantes posições no
                estabelecimento do orçamento setorial.
            </p>
            <img src="imagens/bg-topo.png"/></div>
        <div class="slider-item">
            <p>
                As experiências acumuladas demonstram que a determinação clara de objetivos acarreta um processo de
                reformulação e modernização das novas proposições.
            </p>
            <img src="imagens/bg-baixo.png"/></div>
    </div>
</div>
<div class="amarela">
    <div class="acessoRapido" style="background-image: url('imagens/fundoGrid.gif')">
        <button></button>
        <button></button>
        <button></button>
        <button></button>
        <button></button>
        <button></button>
    </div>
</div>
<!--Roda pé-->
<div id="footer">
    <footer style="position: relative; margin-top: 3px">
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