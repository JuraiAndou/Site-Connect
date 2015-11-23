<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/topo.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"> </script>
</head>
<body background="red">
    <?php

    ?>
    <header>
        <div class="header">
            <img src="imagens/logo.gif" class="logo"/>
            <button class="areaCliente">
                <img src="imagens/areaClienteIcon.png" alt="" id="imgCliente">
                <span id="btnAreaCliente">Área Cliente</span>
            </button>
        </div>
        <div id="menu">
        <!--  -->
            <nav id="nav">
                <ul>
                    <li><a href="#home" class="a">Ínicio</a></li>
                    <li><a href="#news" class="a">A Empresa</a></li>
                    <li>
                        <a href="#contact" class="a">Internet</a>
                        <ul class="dropdown">
                            <li><a href="#">Lorem submenu1</a></li>
                            <li><a href="#">Lorem submenu2</a></li>
                            <li><a href="#">Lorem submenu3</a></li>
                        </ul>
                    </li>
                    <li><a href="#about" class="a">Cobertura</a></li>
                    <li><a href="#about" class="a">Assinatura</a></li>
                    <li><a href="#about" class="a">Contato</a></li>
                </ul>
            </nav>
        <!--  -->
            <!--Menu Dropdown-->
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button class="navbar-brand">
                        <img src="imagens/areaClienteIconMini.png"  id="imgClienteMini">
                    </button>                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav nav-pills nav-stacked" id="miniMenu">
                        <li><a href="#">Ínicio</a></li>
                        <li><a href="#">A empresa</a></li>
                        <li><a href="#">Internet</a></li>
                        <li><a href="#">Cobertura</a></li>
                        <li><a href="#">Assinaturas</a></li>
                        <li><a href="#" >Contatos</a></li>
                    </ul>
                </div>
            </nav>  
            <!--Fim Meny DropDown-->
        </div>
    </header>
</body>
</html>

