<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/topo.css">
    <link rel="stylesheet" href="css/internet.css"/>
    <link  rel="stylesheet" href="css/rodape.css">
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <!--Slider links-->
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
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

<!-- Conteudo -->

<div id="img">
    <img src="imagens/bg-topo-2pagina.png" id="banner"/>
    <div class="anuncio">
        <h4>Ínicio/Internet/Para sua casa</h4>
        <h2>INTERNET PARA SUA CASA</h2>
        <p>Diversão, informação e entreterimento 24h por dia em alta velocidade! Acesse a internet sem interferências, 
        interrupções e, principalmente, sem perda de tempo. Escolha seu plano e Connect sua casa com o mundo</p>
    </div>
    <div class="tabela">    
        <table border="0">
            <tr>
                <td>
                    <div class="Fundotop"><label for="">R$00,00</label></div>
                    <img src="imagens/image-01-mega.png" alt="" class="imgMEGAS">
                    <button class="Fundobottom"><a href="">CONTRATAR</a></button>
                </td>
                <td>
                    <div class="Fundotop"><label for="">R$00,00</label></div>
                    <img src="imagens/image-02-mega.png" alt="" class="imgMEGAS">
                    <button class="Fundobottom"><a href="">CONTRATAR</a></button>
                </td>
                <td>
                    <div class="Fundotop"><label for="">R$00,00</label></div>
                    <img src="imagens/image-04-mega.png" alt="" class="imgMEGAS"> 
                    <button class="Fundobottom"><a href="">CONTRATAR</a></button>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="pontinhos">•••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••</td>
            </tr>
            <tr>
                <td>
                    <div class="Fundotop"><label for="">R$00,00</label></div>
                    <img src="imagens/image-08-mega.png" alt="" class="imgMEGAS">
                    <button class="Fundobottom"><a href="">CONTRATAR</a></button>
                </td>
                <td>
                    <div class="Fundotop"><label for="">R$00,00</label></div>
                    <img src="imagens/image-10-mega.png" alt="" class="imgMEGAS">
                    <button class="Fundobottom"><a href="">CONTRATAR</a></button>
                </td>
                <td>
                    <div class="Fundotop"><label for="">R$00,00</label></div>
                    <img src="imagens/image-20-mega.png" alt="" class="imgMEGAS">
                    <button class="Fundobottom"><a href="">CONTRATAR</a></button>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <img src="imagens/bg-baixo.png" alt="" class="faleConosco">
        <div class="blocoIMG">
            <h2 id="h2">Fale com a gente</h2>
            <h5 id="h5">Entre em contato conosco agora mesmo e conheça melhor as soluções da Connect para você!</h5>
            <h4 id="h4">0800 000 0000 | (85) 0000-0000</h4>
        </div>        
    </div>
</div> 



<!-- footer -->
<!-- <div id="footer">
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
</div> -->
</body>
</html>