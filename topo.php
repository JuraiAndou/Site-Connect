 <!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/topo.css">
  <link  rel="stylesheet" href="css/rodape.css">
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
  <script>
    $(document).ready(function() {
        $("li#btn").click(function(){
            $("ul#dropdown").toggle("fast");
        });

        $("li#btn2").click(function(){
            $("ul#dropdown2").toggle("fast");
        });
    });
  </script>

  <script>
  $(document).ready(function(){
      $(".nav_bar").click(function(){
        $(".navigation").toggleClass("visible");
        $("body").toggleClass("opacity");z
      });
    });
  </script>
</head>
<body>

  <img src="imagens/logo.gif" alt="" class="logo">
  <button  class="btnCliente">
    <img src="imagens/areaClienteIcon.png" alt="">
    <span id="txtBtn">Área Cliente</span>
  </button>
    <nav>
      <div class="navigation">
        <ul id="ul">
          <li><a href="">Ínicio</a></li>
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
              <li class="submenu"><a href="">Teste</a></li>
              <li class="submenu"><a href="">Teste</a></li>
              <li class="submenu"><a href="">Teste</a></li>
            </ul>            
          </li>
          <li><a href="#" tabindex="1">Cobertura</a></li>
          <li><a href="#" tabindex="1">Assinaturas</a></li>
          <li><a href="">Contato</a></li>
        </ul>
      </div>
      <div class="nav_bg">
        <div class="nav_bar"> <span></span> <span></span> <span></span> </div>
      </div>
    </nav> 


