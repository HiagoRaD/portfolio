<?php
include(__DIR__.'/inc.header.php');
?>
    <main>
        <section id="logar">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="texto-top-sub">
                                <p><a href="index.php">INÍCIO</a> > <strong>LOGIN</strong></p>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="h1-principal">Logar</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0 pdg-sides-0-mob">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 .pdg-sides-0-mob">
                                <div class="col-lg-12">
                                    <h2>Ainda não sou cadastrado</h2>
                                </div>

                                <form id="form-login-n-cad" method="POST" action="#">
                                    <div class="col-lg-12 form-group cadastro pdg-sides-0-mob">
                                        <div>
                                            <p>Seu nome</p>
                                            <input id="nome" type="text" name="nome" class="form-input" required="required">
                                        </div>
                                        <div>
                                            <p>E-mail</p>
                                            <input id="email" type="email" name="email" class="form-input" required="required">
                                        </div>
                                        <div>
                                            <p>Senha</p>
                                            <input id="senha-login" type="password" name="senha" class="form-input" required="required"> 
                                            <p class="aviso-senha"><span class="icon-info"></span> Sua senha deve conter pelo menos 6 caracteres.</p>
                                        </div>
                                        <div>
                                            <p>Insira a senha novamente</p>
                                            <input id="senha2" type="password" name="senha2" class="form-input" required="required">
                                        </div>
                                        <div>
                                            <button type="submit" name="criar" value="CRIAR CONTA" class="btn-form" data-toggle="modal" data-target="#valide-modal">CRIAR CONTA</button>
                                        </div>
                                        <div>
                                            <p class="termos">Ao criar uma conta, você concorda com as Condições de uso
                                            da Entre Ervas e com a Política de privacidade.</p>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 .pdg-sides-0-mob">
                                <div class="col-lg-12">
                                    <h2>Já sou cadastrado</h2>
                                </div>
                                
                                <form id="form-login-cad" method="POST" action="#">
                                    <div class="col-lg-12 form-group logar pdg-sides-0-mob">
                                        <div class="primeiro">
                                            <input id="email-form" type="email" name="email" class="form-input" required="required" placeholder="E-mail">
                                            <a href=""><i>Esqueci meu E-mail</i></a>
                                        </div>

                                        <div>
                                            <input id="senha-form" type="password" name="senha" class="form-input" required="required" placeholder="Senha">
                                            <a href="esqueciminhasenha.php"><i>Esqueci minha Senha</i></a>
                                        </div>
                                        <div>
                                            <button type="submit" name="criar" value="CRIAR CONTA" class="btn-form entar">ENTRAR</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="valide-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button id="close-modal" type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Valide seu cadastro para continuar</h4>
                        <p>Insira o código recebido em seu e-mail</p>
                    </div>
                    <div class="modal-body">
                        <form id="form-validar-cadastro" method="POST" action="#">
                            <div class="input-digit">
                                <input id="num-input-1" class="input-dig" type="text" name="num_1" required="required" maxlength="1" minlenght="1">
                            </div>
                            <div class="input-digit">
                                <input id="num-input-2" class="input-dig" type="text" name="num_2" required="required" maxlength="1" minlenght="1">
                            </div>
                            <div class="input-digit">
                                <input id="num-input-3" class="input-dig" type="text" name="num_3" required="required" maxlength="1" minlenght="1">
                            </div>
                            <div class="input-digit">
                                <input id="num-input-4" class="input-dig" type="text" name="num_4" required="required" maxlength="1" minlenght="1">
                            </div>
                            <div class="input-digit">
                                <input id="num-input-5" class="input-dig" type="text" name="num_5" required="required" maxlength="1" minlenght="1">
                            </div>
                            <div class="input-digit">
                                <input id="num-input-6" class="input-dig" type="text" name="num_6" required="required" maxlength="1" minlenght="1">
                            </div>
                            <div class="btn-wrapper">
                                <button type="submit" class="btn-form">ENVIAR</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p style="display: block">Ao criar uma conta, você concorda com as Condições de uso da
                            Entre Ervas e com a Política de privacidade</p>
                    </div>
                </div>
        
            </div>
        </div>
    </main>
<?php
include(__DIR__.'/inc.footer.php');
?>