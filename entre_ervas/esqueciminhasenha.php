<?php
include(__DIR__.'/inc.header.php');
?>

<main>
    <section id="esqueci-minha-senha">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="texto-top-sub">
                            <p><a href="index.php">INÍCIO</a> > <strong>ESQUECI MINHA SENHA</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="h1-principal">Esqueci minha senha</h1>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-0 col-xs-offset-0 wrapper-email">
                        <form id="form-email-validar" method="POST" class="form-group" action="#">
                            <div class="col-lg-12 pdg-sides-0-mob">
                                <h2>Digite o e-mail cadastrado em sua conta</h2>
                                <input id="email-form" type="email" name="email"  class="form-input" required="required" placeholder="E-mail">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button id="button-valid" type="submit" name="button" class="btn-form" data-toggle="modal" data-target="">ENVIAR</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-0 col-xs-offset-0 wrapper-alt">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2>Cadastrar nova senha</h2>
                        </div>
                        <form id="form-alt-nova-senha" class="form-group">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="password" class="form-input" id="senha-redefinir-1" name="senha1" value="" required="required" placeholder="Digite a nova senha">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="password" class="form-input" id="senha-redefinir-2" name="senha2" value="" required="required" placeholder="Digite a senha novamente">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn-form" name="salvar" onclick="" value="SALVAR">SALVAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
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
                        <input id="num-input-1" class="input-dig" pattern= "[0-9]" type="text" name="num_1" required="required"
                            maxlength="1" minlenght="1">
                    </div>
                    <div class="input-digit">
                        <input id="num-input-2" class="input-dig" pattern= "[0-9]" type="text" name="num_2" required="required"
                            maxlength="1" minlenght="1">
                    </div>
                    <div class="input-digit">
                        <input id="num-input-3" class="input-dig" pattern= "[0-9]" type="text" name="num_3" required="required"
                            maxlength="1" minlenght="1">
                    </div>
                    <div class="input-digit">
                        <input id="num-input-4" class="input-dig" pattern= "[0-9]" type="text" name="num_4" required="required"
                            maxlength="1" minlenght="1">
                    </div>
                    <div class="input-digit">
                        <input id="num-input-5" class="input-dig" pattern= "[0-9]" type="text" name="num_5" required="required"
                            maxlength="1" minlenght="1">
                    </div>
                    <div class="input-digit">
                        <input id="num-input-6" class="input-dig" pattern= "[0-9]" type="text" name="num_6" required="required"
                            maxlength="1" minlenght="1">
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

<?php
include(__DIR__.'/inc.footer.php');
?>