<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Entre Ervas </title>
    <!--bootstrap-->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
    <!--animate css-->
    <link href="assets/styles/animate.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css" />
    <!--slick css-->
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css" />
    <!--utilitarios css-->
    <link rel="stylesheet" type="text/css" href="assets/styles/utilitarios.css" />
    <!--icons custom-->
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
    <!--style css-->
    <link href="assets/styles/custom.css" rel="stylesheet" />
</head>

<body>
    <!--a-->
    <header>
        <div class="container-fluid">
            <div class="container">
                <!-- navbar desktop v2.0-->
                <div class="row hidden-sm hidden-xs menu-desk">
                    <div class="col-lg-6 col-md-6">
                        <div class="col-lg-5 col-md-5">
                            <a href="index.php">
                                <a href="index.php">
                                    <img src="assets/images/entreervas-logo.svg" class="img-responsive">
                                </a>
                            </a>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <form class="form-inline">
                                <input class="form-control barra-busca" type="search"
                                    placeholder="QUE CHÁ VOÇÊ ESTÁ PROCURANDO" aria-label="Search">
                                <button class="btn btn-outline-success botao-busca"><span class="icon-lupa"></span></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="col-lg-4 col-md-4 item-menu">
                            <a class="nav-link" href="produtos.php">PRODUTOS<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="col-lg-4 col-md-4 item-menu">
                            <span class="icon-carrinho_bold"></span>
                            <a class="nav-link" href="carrinho.php">MEU CARRINHO<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="col-lg-4 col-md-4 item-menu" style="display: block">
                            <span class="icon-user"></span>
                            <p style="color: white; float: right">Olá :)<br><a class="nav-link" href="#"
                                    style="font-style: italic; text-decoration: underline;">
                                    <a href="login.php"><i>ENTRE OU CADASTRE-SE</i></a><span class="sr-only">(current)</span></a></p>
                        </div>
                        <div class="col-lg-4 col-md-4 item-menu" style="display: none">
                            <p id="expand" style="float: right">Olá :)
                                <a class="nav-link" href="#" style="font-style: italic;">
                                    HIAGO<span class="sr-only">(current)</span><i class="fas fa-chevron-down"></i></a>
                            </p>
                            <span class="icon-user" style="float: right"></span>
                            <div class="menu-pop">
                                <div class="img-div text-center">
                                    <img src="assets/images/up-menu.png">
                                </div>
                                <div class="conteudo">
                                    <ul>
                                        <li><span class="icon-pedidos"></span><a href="pedidos.php">SEUS PEDIDOS</a></li>
                                        <li><span class="icon-conf"></span><a href="conta.php">SUA CONTA</a></li>
                                        <li>
                                            <div class="linha"></div>
                                        </li>
                                        <li><span class="icon-pergunta"></span><a href="faq.php">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!--menu mob-->
                <div class="row hidden-lg hidden-md menu-mob">
                    <div class="col-sm-10 col-xs-10">
                        <a href="index.php"><img src="assets/images/entreervas-logo.svg" class="img-responsive"></a>
                    </div>
                    <div id="expand-mob" class="col-sm-2 col-xs-2 menu-icon">
                        <span id="icone-expand-mob" class="icon-menu"></span>
                    </div>
    
                    <div id="menu-mob" class="col-sm-12 col-xs-12">
                        <ul>
                            <li>Olá, <i id="user-name" style="text-decoration: underline;">Hiago</i></li>
                            <li>
                                <input class="form-control barra-busca float-left" type="search"
                                    placeholder="QUE CHÁ VOÇÊ ESTÁ PROCURANDO" aria-label="Search"
                                    style="padding-right: 0;">
                                <button class="btn btn-outline-success botao-busca"><span class="icon-lupa"></span></button>
                            </li>
                            <li><a href="carrinho.php"><span class="od icon-carrinho_bold"></span>carrinho</a></li>
                            <li><a href="pedidos.php"><span class="od icon-pedidos"></span>pedidos</a></li>
                            <li><a href="conta.php"><span class="od icon-conf"></span>conta</a></li>
                            <li><a href="faq.php"><span class="od icon-pergunta"></span>faq</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>