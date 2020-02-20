<?php
include(__DIR__.'/inc.header.php');
?>
    <main id="main-carrinho">
        <section><div id="scroll-to"></div></section>
        <section id="head-carrinho">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="texto-top-sub">
                                <p><a href="index.php">INÍCIO</a> > <strong>CARRINHO</strong></p>
                            </div>
                        </div>

                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                            <div class="row">
                                <div id="etapa-1" class="icon-etapa icon-ativo"><span class="icon-carrinho"></span></div>
                                <div id="etapa-2" class="icon-etapa"><span class="icon-user"></span></div>
                                <div id="etapa-3" class="icon-etapa"><span class="icon-marker"></span></div>
                                <div id="etapa-4" class="icon-etapa"><span class="icon-card"></span></div>
                                <div id="etapa-5" class="icon-etapa"><span class="icon-check"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-carrinho-vazio">
            <div class="container-fluid">
                <div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
                        <h1>Não há nada em seu carrinho, confira nossos produtos!</h1>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-0 col-xs-offset-0">
                        <input type="button" value="VER PRODUTOS" onclick="window.location.href='produtos.php'" class="btn-form">
                    </div> 
                </div>
            </div>    
        </section>

        <!--carrinho-->
        <section id="section-etapa-1">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1>Meu carrinho</h1>
                            </div>

                            <div class="itens-carrinho-wrapper">
                                <div id="item-cart-01" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob item-cart">
                                    <input value="0.250" id="peso-1" class="hidden-all">

                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                            <img src="assets/images/camomila_c_bg.png" class="img-responsive">
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 pdg-right-0-mob">
                                            <h3><a href="produto.php" class="a-neutro">Bold a granel</a></h3>
                                            <p data-value="123456" class="cod"><i>Cod. 123456</i></p>
                                            <ul>
                                                <li>Quantidade: <strong class="quantitade-1">1</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 div-quantidade text-center-mob">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 quantidade-label">
                                            <p class="color-8ba19a">QUANTIDADE:</p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 number-input text-center">
                                            <table style="margin-top: 0px;">
                                                <tr>
                                                    <td><button id="down-1" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="icon-number ver"></button>
                                                        <input id="carrinho-qt-1" class="quantity" min="0" max="99" name="quantity" value="1"
                                                            type="number">
                                                        <button id="up-1" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="plus icon-number ver"></button></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center-mob valor-unitario">
                                        <p class="color-8ba19a">VALOR UNITÁRIO</p>
                                        <span class="glyphicon glyphicon-remove remover-item hidden-sm hidden-xs" type="span"
                                            data-item="item-cart-01" style="float: right"></span>
                                        <h3 data-value="14.50" id="val-1">R$ 14,50</h3>
                                    </div>
                            
                                    <div class="col-sm-8 col-xs-8 hidden-lg hidden-md col-sm-offset-2 col-xs-offset-2 linha-vara"></div>
                            
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 div-subtotal text-center">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <p class="p-medium">SUBTOTAL (<strong class="quantitade-1">1</strong> ITEM)</p>
                                            <h3 id="subtotal-1" data-value="14.50" class="subtotal-etapa-1">R$ 14,50</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
                                        <div class="col-sm-8 col-xs-8 col-sm-offset-2 col-xs-offset-2">
                                            <button type="button" class="btn-form remover-item" data-item="item-cart-01">REMOVER</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 hidden-lg hidden-md linha-vara"></div>
                                </div>
                            
                                <div id="item-cart-02" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob item-cart">
                                    <input value="0.250" id="peso-2" class="hidden-all">

                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                            <img src="assets/images/camomila_c_bg.png" class="img-responsive">
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 pdg-right-0-mob">
                                            <h3><a href="produto.php" class="a-neutro">Bold a granel</a></h3>
                                            <p data-value="123456" class="cod"><i>Cod. 123456</i></p>
                                            <ul>
                                                <li>Quantidade: <strong class="quantitade-2">1</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 div-quantidade text-center-mob">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 quantidade-label">
                                            <p class="color-8ba19a">QUANTIDADE:</p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 number-input text-center">
                                            <table style="margin-top: 0px;">
                                                <tr>
                                                    <td>
                                                        <button id="down-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="icon-number ver"></button>
                                                        <input id="carrinho-qt-2" class="quantity" min="0" max="99" name="quantity" value="1"
                                                            type="number">
                                                        <button id="up-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="plus icon-number ver"></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center-mob valor-unitario">
                                        <p class="color-8ba19a">VALOR UNITÁRIO</p>
                                        <span class="glyphicon glyphicon-remove remover-item hidden-sm hidden-xs" type="span"
                                            data-item="item-cart-02" style="float: right"></span>
                                        <h3 data-value="14.50" id="val-2">R$ 14,50</h3>
                                    </div>
                            
                                    <div class="col-sm-8 col-xs-8 hidden-lg hidden-md col-sm-offset-2 col-xs-offset-2 linha-vara"></div>
                            
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 div-subtotal text-center">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <p class="p-medium">SUBTOTAL (<strong class="quantitade-2">1</strong> ITEM)</p>
                                            <h3 id="subtotal-2" data-value="14.50" class="subtotal-etapa-1">R$ 14,50</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
                                        <div class="col-sm-8 col-xs-8 col-sm-offset-2 col-xs-offset-2">
                                            <button type="button" class="btn-form remover-item" data-item="item-cart-02">REMOVER</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 hidden-lg hidden-md linha-vara"></div>
                                </div>
                                <div id="item-cart-03" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob item-cart">
                                    <input value="0.250" id="peso-3" class="hidden-all">

                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                            <img src="assets/images/camomila_c_bg.png" class="img-responsive">
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 pdg-right-0-mob">
                                            <h3><a href="produto.php" class="a-neutro">Bold a granel</a></h3>
                                            <p data-value="123456" class="cod"><i>Cod. 123456</i></p>
                                            <ul>
                                                <li>Quantidade: <strong class="quantitade-3">1</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 div-quantidade text-center-mob">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 quantidade-label">
                                            <p class="color-8ba19a">QUANTIDADE:</p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 number-input text-center">
                                            <table style="margin-top: 0px;">
                                                <tr>
                                                    <td>
                                                        <button id="down-3" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="icon-number ver"></button>
                                                        <input id="carrinho-qt-3" class="quantity" min="0" max="99" name="quantity" value="1"
                                                            type="number">
                                                        <button id="up-3" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="plus icon-number ver"></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center-mob valor-unitario">
                                        <p class="color-8ba19a">VALOR UNITÁRIO</p>
                                        <span class="glyphicon glyphicon-remove remover-item hidden-sm hidden-xs" type="span"
                                            data-item="item-cart-03" style="float: right"></span>
                                        <h3 data-value="14.50" id="val-3">R$ 14,50</h3>
                                    </div>
                            
                                    <div class="col-sm-8 col-xs-8 hidden-lg hidden-md col-sm-offset-2 col-xs-offset-2 linha-vara"></div>
                            
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 div-subtotal text-center">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <p class="p-medium">SUBTOTAL (<strong class="quantitade-3">1</strong> ITEM)</p>
                                            <h3 id="subtotal-3" data-value="14.50" class="subtotal-etapa-1">R$ 14,50</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
                                        <div class="col-sm-8 col-xs-8 col-sm-offset-2 col-xs-offset-2">
                                            <button type="button" class="btn-form remover-item" data-item="item-cart-03">REMOVER</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 hidden-lg hidden-md linha-vara"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <form id="form-calc-frete-cart" method="POST" action="">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pdg-sides-0-mob">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob">
                                                <h5>CALCULAR FRETE</h5>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 pdg-sides-0-mob">
                                                <input type="text" placeholder="00000000" minlength="8" maxlength="8" name="cep" id="cep-form-cart" class="input-cep-form">
                                                <p><a href="" style="color: #000000; font-size: 12px"><i>Não sei meu CEP</i></a></p>
                                            </div>
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob" style="padding-right: 0">
                                                <button class="btn-form btn-frete" type="submit">CALCULAR</buttom>
                                            </div>
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col-lg-offset-7 col-md-offset-0 col-sm-offset-0 col-xs-offset-0 loading text-center animated fadeIn">
                                                <div class="loadingio-spinner-rolling-vjl1ixixgop">
                                                    <div class="ldio-mr7hb8w8ba">
                                                        <div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0 pdg-special-table-mob frete-table">
                                        <form>
                                        <table>
                                            <tr>
                                                <td>
                                                    <label class="container-check cc-01">
                                                        <input id="sedex" type="radio" name="check-frete" class="checkbox-envio">
                                                        <span class="checkmark"></span>
                                                        <span class="tipo-envio-span">SEDEX</span>
                                                    </label>
                                                </td>
                                                <td><p>até <strong id="prazo-sedex">0</strong> dias úteis</p></td>
                                                <td data-value="0.00" id="sedex-preco"><p>R$ 0,00</p></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="container-check cc-02">
                                                        <input id="pac" type="radio" name="check-frete" class="checkbox-envio">
                                                        <span class="checkmark"></span>
                                                        <span class="tipo-envio-span">PAC</span>
                                                    </label>
                                                </td>                                                
                                                <td><p>até <strong id="prazo-pac">0</strong> dias úteis</p></td>
                                                <td data-value="0.00" id="pac-preco"><p>R$ 0,00</p></td>
                                            </tr>
                                        </table>
                                        </form>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0 text-center div-frete">
                                        <p class="p-medium">FRETE</p>
                                        <h3 data-value="0.00" id="carrinho-preco-frete" class="subtotal-etapa-1">R$ 0,00</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 linha-vara"></div>

                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-offset-9 col-md-offset-9 col-sm-offset-0 col-xs-offset-0 text-center pdg-sides-0-mob">
                                <p class="p-medium">VALOR TOTAL</p>
                                <h3 data-value="38.50" id="carrinho-total" style="font-weight: 700;">R$ 38,50</h3>
                                <button id="avancar-1" name="avancar" value="" class="btn-form avancar">AVANÇAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--login-->
        <section id="section-etapa-2">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>Logar</h1>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-0 col-xs-offset-0">                        
                            <form method="POST" action="#">
                                <div class="col-lg-12 form-group logar pdg-sides-0-mob">
                                    <div class="primeiro">
                                        <input id="email-form" type="email" name="e-mail" class="form-input" required="required"
                                            placeholder="E-mail">
                                        <a href=""><i>Esqueci meu E-mail</i></a>
                                    </div>
                        
                                    <div>
                                        <input id="senha-form" type="password" name="senha" class="form-input" required="required"
                                            placeholder="senha">
                                        <a href=""><i>Esqueci minha Senha</i></a>
                                    </div>
                                    <div>
                                        <button type="submit" name="criar" value="CRIAR CONTA" class="btn-form entar" id="avancar-2">ENTRAR</button>
                                    </div>

                                    <div class="col-lg-8 col-lg-offset-2 linha-vara"></div>

                                    <div class="text-center">
                                        <input type="button" value="CADASTRE-SE" onclick="window.location.href='login.php'" class="btn-form avancar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--endereço-->
        <section id="section-etapa-3">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1>Endereço</h1>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pdg-sides-0-mob" style="padding-right: 0">
                                <div class="col-lg-12">
                                    <h2>Endereço principal</h2>
                                </div> 
                                <div class="wrapper-endereco col-lg-12 pdg-sides-0-mob"> 
                                    <div class="col-lg-12 text-left info-endereco pdg-sides-0-mob">
                                        <ul>
                                            <li><strong>CEP: </strong>80410-060</li>
                                            <li><strong>Endereço: </strong>Rua Martim Afonso, 371</li>
                                            <li><strong>Complemento: </strong>Apto. 302 Bloco B</li>
                                            <li><strong>Localidade: </strong>São Francisco - Curitiba - PR</li>
                                            <li><strong>Tipo: </strong>Residencial</li>
                                        </ul>
                                    </div> 
                                    <div class="col-lg-5 pdg-sides-0-mob">
                                        <button type="submit" name="editar-endereco" value="editar" class="btn-form" id="editar">EDITAR</button>
                                    </div>
                                    <div class="col-lg-5 pdg-sides-0-mob">
                                        <button type="submit" name="excluir-endereco" value="excluir" class="btn-form" id="excluir">EXCLUIR</button>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden-lg hidden-md col-sm-12 col-xs-12 linha-vara"></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0 box-endereco">
                                <div class="col-lg-12">
                                    <h2>Cadastrar novo endereço<span id="loading-span-cart"></span></h2>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0 pdg-sides-0-mob">
                                    <form id="form-cadastrar-novo-endereco" method="POST" action="#">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 .pdg-left-0-mob">
                                                <input type="text" class="form-input" name="cep" id="form-cep-3" placeholder="CEP" minlength="8" maxlength="8">
                                                <label id="nome-error" class="error cep-n-encontrado" for="nome">CEP não encontrado</label>
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 .pdg-right-0-mob">
                                                <input type="text" class="form-input" name="logradouro" id="form-logradouro-3" placeholder="ENDERECO">
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 .pdg-left-0-mob">
                                                <input type="text" class="form-input" name="numero" id="form-numero-3" placeholder="NUMERO">
                                            </div>
                                            
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 .pdg-right-0-mob">
                                                <input type="text" class="form-input" name="complemento" id="form-complemento-3" placeholder="COMPLEMENTO">
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 .pdg-left-0-mob">
                                                <input type="text" class="form-input" name="estado" id="form-estado-3" placeholder="ESTADO">
                                            </div>
                                            
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 .pdg-right-0-mob">
                                                <input type="text" class="form-input" name="bairro" id="form-bairro-3" placeholder="BAIRRO">
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 .pdg-right-0-mob">
                                                <input type="text" class="form-input" name="cidade" id="form-cidade-3" placeholder="CIDADE">
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob">
                                                <button id="avancar-3" type="button" class="btn-form" name="usar" id="form-usar">USAR ESTE ENDEREÇO</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                            <div class="col-sm-12 col-xs-12 hidden-lg hidden-md linha-vara"></div>
                        </div>
                    </div>
                    
                    <div class="row row-botoes">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0 text-center btn-ajustes-1">
                            <input type="button" value="ADICIONAR OUTRO ENDEREÇO" onclick="window.location.href='conta.php'" class="btn-form avancar" style="margin-right: 5px;">
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                            <button id="avancar-3-" name="avancar" value="" class="btn-form btn-endereco-principal avancar">USAR ENDEREÇO PRINCIPAL</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--resumo/pagamento-->
        <section id="section-etapa-4">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1>Resumo do pedido</h1>
                            </div>
                            <div class="itens-carrinho-wrapper">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                            <img src="assets/images/camomila_c_bg.png" class="img-responsive">
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                            <h3><a href="produto.php" class="a-neutro">Bold a granel</a></h3>
                                            <p class="cod"><i>Cod. 123456</i></p>
                            
                                            <ul>
                                                <li>Quantidade: 1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 div-quantidade text-center-mob">
                                        <label class="color-8ba19a">QUANTIDADE: </label>
                                        <h3 class="">1</h3>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center-mob valor-unitario">
                                        <p class="color-8ba19a">VALOR UNITÁRIO</p>
                                        <h3>R$ 14,50</h3>
                                    </div>

                                    <div class="col-sm-8 col-xs-8 hidden-lg hidden-md col-sm-offset-2 col-xs-offset-2 linha-vara"></div>

                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 div-subtotal text-center background-none-mob">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <p class="p-medium">SUBTOTAL (1 ITEM)</p>
                                            <h3>R$ 14,50</h3>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="hidden-lg hidden-md col-sm-12 col-xs-12 linha-vara"></div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                            <img src="assets/images/camomila_c_bg.png" class="img-responsive">
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                            <h3><a href="produto.php" class="a-neutro">Camomila a granel</a></h3>
                                            <p class="cod"><i>Cod. 123456</i></p>
                            
                                            <ul>
                                                <li>Quantidade: 1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 div-quantidade text-center-mob">
                                        <label class="color-8ba19a">QUANTIDADE: </label>
                                        <h3 class="text-center-mob">1</h3>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 valor-unitario text-center-mob">
                                        <p ">VALOR UNITÁRIO</p>
                                        <h3>R$ 14,50</h3>
                                    </div>
                                    
                                    <div class="col-sm-8 col-xs-8 hidden-lg hidden-md col-sm-offset-2 col-xs-offset-2 linha-vara"></div>

                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 div-subtotal text-center background-none-mob">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <p class="p-medium">SUBTOTAL (1 ITEM)</p>
                                            <h3>R$ 14,50</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden-lg hidden-md col-sm-12 col-xs-12 linha-vara"></div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 frete-div-4">
                                        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                            <span class="icon-caminhao"></span>
                                        </div>
                                        <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12 text-center-mob">
                                            <P><strong>Frete</strong></p>
                                            <span class="icon-caminhao hidden-lg hidden-md"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
                                        <table>
                                            <tr>
                                                <td><p><strong>SEDEX</strong></p></td>
                                                <td class="hidden-lg hidden-md"><p>até 3 dias úteis</p></td>
                                                <td class="hidden-sm hidden-xs" style="padding-left: 45px;"><p>até 3 dias úteis</p></td>
                                                <td><p>R$ 9,50</p></td>
                                            </tr> 
                                        </table>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0 text-center div-frete">
                                        <p class="p-medium">FRETE</p>
                                        <h3>R$ 9,50</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 linha-vara"></div></div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob">
                                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 endereco-div pdg-sides-0-mob">
                                    <div class="col-lg-3 col-md-1 col-sm-2 col-xs-4">
                                        <p><strong>Endereço de entrega</strong></p>
                                    </div>
                                    <div class="col-lg-9 col-md-4 col-sm-6 col-xs-8 pdg-sides-0-mob">
                                        <p>Rua Martim Afonso, 371. Apto. 302 Bloco B.
                                            São Francisco - Curitiba - PR - 80410-060</p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-1 total-final">
                                        <p class="p-medium">VALOR TOTAL</p>
                                        <h3 style="font-weight: 700;">R$ 38,50</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="#">
                        <div id="formas-de-pagamentos" class="row">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h1>Formas de pagamento</h1>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-special-cartao-mob check-div" style="padding-left: 35px;">
                                    <label class="container-check">
                                        <input id="cartao" type="radio" name="pag-check" checked="checked" class="checkbox-envio">
                                        <span class="checkmark"></span>
                                        <h3 class="forma-head">Cartão de Crédito</h3>
                                        <p class="forma-info">Inserir dados do cartão de crédito</p>
                                    </label>
                                </div>

                                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 pdg-sides-0-mob">
                                    <form method="POST" action="#">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cartao pdg-sides-0-mob">                              
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob">
                                                <input type="text" name="endereco" id="endereco-form" placeholder="NOME" class="form-input">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob">
                                                <input type="text" name="numero" id="numero-form" placeholder="NÚMERO DO CARTÃO" class="form-input">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 pdg-left-0-mob">
                                                <input type="text" name="validade" id="validade-form" placeholder="00/00" class="form-input">
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-7 col-xs-7 pdg-right-0-mob">
                                                <input type="text" name="cvv" id="cvv-form" placeholder="CVV" class="form-input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cartao pdg-sides-0-mob">                              
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob">
                                                <p class="p-cartao">Parcelamento</p>
                                                <select id="parcelamento-form" name="parcelamento" value="parana" class="form-input select-parcelas">selected="selected"
                                                    <option value="null" selected="selected">
                                                    SELECIONE O NÚMERO DE PARCELAS</option>
                                                    <option value="1-parcelas">1x sem juros</option>
                                                    <option value="2-parcelas">2x sem juros</option>
                                                    <option value="3-parcelas">3x sem juros</option>               
                                                </select>                                        
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdg-sides-0-mob">
                                                <input type="text" name="cpf" id="cpf-form" placeholder="CPF DO TITULAR DO CARTAO" class="form-input">
                                                <p class="p-cartao">(Somente números, sem intervalos)</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 linha-vara"></div></div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boleto pdg-special-cartao-mob" style="padding-left: 35px;">
                                    <label class="container-check">
                                        <input id="boleto" type="radio" name="pag-check" class="checkbox-envio">
                                        <span class="checkmark"></span>
                                        <h3 class="forma-head">Boleto Bancário</h3>
                                        <p class="forma-info">Acrescente 3 dias úteis ao prazo de entrega informado no site. Esse é o prazo máximoestipulado pelo banco para
                                        disponibilizar a confirmação de pagamento. Importante: caso vocêtenha um programa anti pop-up, você deverá
                                        desativá-lo para a impressão do boleto. Caso nãoefetue esse processo, você tem a opção de imprimir o boleto
                                        na próxima página correspondentea finalização do pedido. *Não aceitamos pagamentos de boletos através de cheques.</p>
                                    </label>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-0 col-xs-offset-0 text-center">
                                <button id="avancar-4" name="avancar" value="" class="btn-form avancar">CONCLUIR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!--finalização-->
        <section id="section-etapa-5">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1>Compra realizada com sucesso!<br>Obrigado!</h1>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center conteudo">
                                <h2>Verifique seu e-mail</h2>
                                <p>Enviamos o <i><strong>seu comprovante de compra</strong></i>, e também o<br> <i><strong>código de rastreio</strong></i> do seu pedido.</p>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
                                <input type="button" value="CONCLUIR" onclick="window.location.href='index.php'" class="btn-form avancar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
include(__DIR__.'/inc.footer.php');
?>