<?php
include(__DIR__.'/inc.header.php');
?>
    <main>
        <section id="produto-interno">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="texto-top-sub">
                                <p><a href="index.php">INÍCIO</a> > <a href="produtos.php">PRODUTOS</a> > <strong>LOGIN</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="row main-row">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
                                    <div class="titulo">
                                        <h1>Camomila • 250g</h1>
                                        <p>Camomila e granel</p>
                                        <p id="cod" class="cod"><i>Cod. 123456</i></p>
                                    </div>
                                    
                                    <div class="box-info-pagamento">
                                        <ul>
                                            <li class="preco">R$ 6,00 </li>
                                            <li class="unidade"><strong> A UNIDADE</strong></li>
                                        </ul>
                                    
                                        <p>em até 12x sem juros no cartão de crédito com
                                            Amex e receba R$ 0,29 (2% de volta)</p>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 produto-img">
                                    <img src="assets/images/background_c_bg_grande.png" class="img-responsive">
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="titulo hidden-sm- hidden-xs">
                                        <h1>Camomila • 250g</h1>
                                        <p>Camomila e granel</p>
                                        <p class="cod"><i>Cod. 123456</i></p>
                                    </div>

                                    <div class="box-info-pagamento hidden-sm- hidden-xs">
                                        <ul>
                                            <li id="preco-produto" data-preco="6.00" class="preco">R$ 6,00 </li>
                                            <li class="unidade"><strong> A UNIDADE</strong></li>
                                        </ul>

                                        <p>em até 12x sem juros no cartão de crédito com
                                        Ame e receba R$ 0,29 (2% de volta)</p>                                        
                                    </div>

                                    <div class="linha-vara hidden-sm hidden-xs"></div>

                                    <form id="form-add-carrinho" method="POST" action="">
                                        <input type="text" class="hidden-all" name="cod" value="123456">

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <select id="gramatura-form" name="gramatura" value="50_gramas" class="form-select">
                                                    <option data-unidade="6.00"  value="50_gramas">50 G</option>
                                                    <option data-unidade="10.00" value="100_gramas">100 G</option>
                                                    <option data-unidade="14.50" value="250_gramas">250 G</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-8 col-xs-8 col-lg-offset-1 col-md-offset-1 pdg-sides-0-mob">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 number-input text-center pdg-sides-0">
                                                    <table style="margin-top: 0px;">
                                                        <tr>
                                                            <td><p class="color-8ba19a vertical-middel quantidade-label">QUANTIDADE:</p></td>
                                                            <td>
                                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="icon-number ver"></button>
                                                                <input id="qt-produto-p" min="1" max="99" name="quantidade" value="1" type="number">
                                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus icon-number ver"></button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 div-num">
                                                <h5>SUBTOTAL (1 ITEM)</h5>
                                                <p data-value="6.00" id="subtotal" class="num">R$ 6,00</p>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 div-num">
                                                <h5>FRETE</h5>
                                                <p id="frete" class="num">R$ 0,00</p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
                                                <button class="btn-form btn-add-carrinho" type="submit">ADICIONAR AO CARRINHO</button>
                                            </div>
                                        </div>
                                    </form>
                                    <form id="form-calcfrete-produto">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h5>CALCULAR FRETE</h5>
                                            </div>

                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                <input required="required" type="text" placeholder="00000000" name="cep" id="cep-form-produto" class="input-cep-form" val="null" maxlength="8" minlenght="8">
                                                <p><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank" style="color: #000000; font-size: 12px"><i>Não sei meu CEP</i></a></p>
                                            </div>

                                            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                                <button id="produto-calcularfrete" class="btn-form btn-frete" type="submit">CALCULAR</buttom>
                                            </div>
                                        </div>
                                    </form>
                                </div>                                
                                
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-7 col-md-offset-7 col-sm-offset-0 col-xs-offset-0 loading text-center animated fadeIn">
                                    <div class="loadingio-spinner-rolling-vjl1ixixgop">
                                        <div class="ldio-mr7hb8w8ba">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>         

                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-7 col-md-offset-7 col-sm-offset-0 col-xs-offset-0 dialog-frete">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button type="button"><span id="close-dialog-frete" class="icon-cross"></span></button>
                                        <table>
                                            <tbody>
                                                <tr id="r-sedex">
                                                    <td>
                                                        <label id="produto-cc-01" class="container-check produto-cc-01">
                                                            <input id="produto-sedex" type="radio" name="check-freteproduto" class="checkbox-envio">
                                                            <span data="sedex" class="checkmark"></span>
                                                            <span class="tipo-envio-span">SEDEX</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <p data-value="3" id="produto-sedex-prazo">até <strong>0</strong> dias úteis</p>
                                                    </td>
                                                    <td>
                                                        <p data-value="9.50" id="produto-sedex-preco">R$ 0,00</p>
                                                    </td>
                                                </tr>
                                                <tr id="r-pac">
                                                    <td>
                                                        <label id="produto-cc-02" class="container-check produto-cc-02">
                                                            <input id="produto-pac" type="radio" name="check-freteproduto" class="checkbox-envio">
                                                            <span data="pac" class="checkmark"></span>
                                                            <span class="tipo-envio-span">PAC</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <p data-value="7" id="produto-pac-prazo">até <strong>0</strong> dias úteis</p>
                                                    </td>
                                                    <td>
                                                        <p data-value="1.00" id="produto-pac-preco">R$ 0,00</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <div class="descricao-wrapper">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mgn-top-25">
                                        <h1>Descrição</h1>
                                        <p>O chá de Camomila seca apresenta propriedades relaxantes e ligeiramente sedativas que ajudam a tratar a insônia, a
                                        relaxar e a tratar a ansiedade e o nervosismo. O seu chá pode ser usado, inflamações, espasmos musculares, c ólicas e
                                        distúrbios menstruais e digestivos.</p>
                                        
                                        <p>Imagens meramente ilustrativas.</p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mgn-top-25">
                                        <h1>Ficha Técnica</h1>
                                        
                                        <ul class="lista-ficha">
                                            <li>Ingredientes: Camomila (80,00%) chá verde (20,00%).</li>
                                            <li>Funcionalidade: Antioxidante, calmante, antinflamatório.</li>
                                            <li>Teor de teína: Baixo.</li>
                                            <li>Cor: Amarelo suave.</li>
                                            <li>Aroma: Cereja Morello.</li>
                                            <li>Sabor: Floral, cereja.</li>
                                        </ul>
                                        <ul class="lista-ficha embalagens">
                                            <li><strong>Embalagem</strong></li>
                                            <li data-p="0.250" id="pesol">
                                                Peso líquido: 250g
                                            </li>
                                            <li data-p="0.260" id="pesob">
                                                Peso Bruto: 260g
                                            </li>
                                            <li data-p="30_20_10" id="dimensoes">
                                                30cm x 20cm x 10cm
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12 linha-vara hidden-lg hidden-md"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="produtos-relacionados">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <h1>Produtos relacionados</h1>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10 col-xs-offset-1 produto col-lg-offset-0 col-md-offset-0 col-sm-offset-0">
                                    <img src="assets/images/camomila_c_bg.png" class="img-produto img-responsive">
                                    <div class="col-lg-12 pdg-0 pdg-right-70">
                                        <h4>Camomila • 250g</h4>
                                    </div>
                                    <div class="col-lg-12 col-md-10 col-sm-10 pdg-0 dados-produto">
                                        <p>O chá de Camomila seca apresenta
                                            propriedades relaxantes e ligeiramente
                                            sedativas que ajudam a tratar a insônia...</p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 pdg-0 dados-produto">
                                        <p>a partir de <strong>R$14,50</strong><br>
                                            <i>1x de R$ 14,50</i></p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 pdg-0 dados-produto">
                                        <a href="produto.php" class="btn botao-ver-mais">🡢 VER MAIS DETALHES</a>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 pdg-0">
                                        <a id="item-01" href="#" class="btn botao-add-carrinho">ADICIONAR AO CARRINHO</a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 pdg-top-10 linha-vara"></div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10 col-xs-offset-1 produto col-lg-offset-0 col-md-offset-0 col-sm-offset-0">
                                    <img src="assets/images/camomila_c_bg.png" class="img-produto img-responsive">
                                    <div class="col-lg-12 pdg-0 pdg-right-70">
                                        <h4>Camomila • 250g</h4>
                                    </div>
                                    <div class="col-lg-12 col-md-10 col-sm-10 pdg-0 dados-produto">
                                        <p>O chá de Camomila seca apresenta
                                            propriedades relaxantes e ligeiramente
                                            sedativas que ajudam a tratar a insônia...</p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 pdg-0 dados-produto">
                                        <p>a partir de <strong>R$14,50</strong><br>
                                            <i>1x de R$ 14,50</i></p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 pdg-0 dados-produto">
                                        <a href="produto.php" class="btn botao-ver-mais">🡢 VER MAIS DETALHES</a>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 pdg-0">
                                        <a id="item-01" href="#" class="btn botao-add-carrinho">ADICIONAR AO CARRINHO</a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 pdg-top-10 linha-vara"></div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10 col-xs-offset-1 produto col-lg-offset-0 col-md-offset-0 col-sm-offset-0">
                                    <img src="assets/images/camomila_c_bg.png" class="img-produto img-responsive">
                                    <div class="col-lg-12 pdg-0 pdg-right-70">
                                        <h4>Camomila • 250g</h4>
                                    </div>
                                    <div class="col-lg-12 col-md-10 col-sm-10 pdg-0 dados-produto">
                                        <p>O chá de Camomila seca apresenta
                                            propriedades relaxantes e ligeiramente
                                            sedativas que ajudam a tratar a insônia...</p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 pdg-0 dados-produto">
                                        <p>a partir de <strong>R$14,50</strong><br>
                                            <i>1x de R$ 14,50</i></p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 pdg-0 dados-produto">
                                        <a href="produto.php" class="btn botao-ver-mais">🡢 VER MAIS DETALHES</a>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 pdg-0">
                                        <a id="item-01" href="#" class="btn botao-add-carrinho">ADICIONAR AO CARRINHO</a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 pdg-top-10 linha-vara"></div>
                                </div>
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