<?php
include(__DIR__.'/inc.header.php');
?>
    <main>
        <section id="sua-conta">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="texto-top-sub">
                                <p><a href="index.php">INÍCIO</a> > <strong>ESQUECI MINHA SENHA</strong></p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="h1-principal">Sua conta</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0 pdg-sides-0-mob pdg-sides-dsk-10">
                            <form id="form-sua-conta" method="POST" action="#" autocomplete="off">
                                <div class="col-lg-12">
                                    <h2>Dados pessoais</h2>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 .pdg-sides-0-mob">
                                    <div class="col-lg-12 form-group cadastro pdg-sides-0-mob">
                                        <div>
                                            <p>Seu nome</p>
                                            <input id="nome" type="text" name="nome" class="form-input" required="required">
                                        </div>
                                        <div>
                                            <p>E-mail</p>
                                            <input id="email" type="email" name="email" class="form-input" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 .pdg-sides-0-mob"> 
                                    <div lass="col-lg-12 pdg-sides-0-mob form-group"> 
                                        <div>
                                            <p>CPF</p>
                                            <input id="cpf" type="text" name="cpf" class="form-input" required="required" placeholder="000.000.000-00">
                                        </div>
                                        <div>
                                            <p>Senha</p>
                                            <input id="senha-original" type="password" name="senha" class="form-input mgn-alterar" placeholder="********" required="required" readonly>
                                            <a id="alterar-senha" herf="#box-alterar-senha" class="a-link"><i>Alterar senha</i></a>
                                        </div>
                                    </div>
                                </div>

                                <!--box alteração de senha-->
                                <div id="box-alterar-senha" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box-alterar-senha form-group">
                                    <div class="col-lg-12">
                                    <div class="col-lg-12">
                                        <h3>Alterar senha</h3>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <p>Senha atual</p>
                                        <input id="senhaatual" type="password" name="senhaatual" class="form-input" placeholder="********" required="required">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <p>Nova senha</p>
                                        <input id="senhanova" type="password" name="senhanova" class="form-input" placeholder="********" required="required">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <p>Reinsira a nova senha</p>
                                        <input id="senhanovadnv" type="password" name="senhanovadnv" class="form-input" placeholder="********" required="required">
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="aviso-senha"><span class="icon-info"></span> Sua senha deve conter pelo menos 6 caracteres.</p>
                                    </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 .pdg-sides-0-mob pdg-sides-0">
                                    <div class="form-group cadastro pdg-sides-0-mob">
                                        <div class="col-lg-12 endereco">
                                            <h2>Seus endereços<span id="loading-span"></span></h2>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 div-cep-conta">
                                            <p>CEP</p>
                                            <input id="cadastro-cep" type="text" name="cep" class="form-input" required="required" minlength="8" maxlength="8">
                                            <label id="nome-error" class="error cep-n-encontrado" for="nome">CEP não encontrado</label>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <p>Logradouro</p>
                                            <input id="logradouro" type="text" name="logradouro" class="form-input" required="required">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                            <p>Numero</p>
                                            <input id="numero" type="text" name="numero" class="form-input" required="required">
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                                            <p>Complemento</p>
                                            <input id="complemento" type="text" name="complemento" class="form-input" required="required">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                <p>Estado</p>
                                                <select id="estado" name="estado" value="PR" class="form-input">
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espírito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR" selected="selected">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option></option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                <p>Cidade</p>
                                                <input id="cidade" type="text" name="cidade" class="form-input" required="required">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <p>Bairro</p>
                                                <input id="bairro" type="text" name="bairro" class="form-input" required="required">
                                            </div>
                                        </div>
                                        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 check-padrao">
                                            <input id="endereco-padrao-form" type="checkbox" name="endereco-padrao" required="required">
                                            <label for="endereco-padrao-form">Escolher como endereço padrão.</label>
                                        </div>-->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label class="checkbox">
                                                <input id="endereco" type="checkbox" name="endereco-padrao">
                                                <span>Escolher como endereço padrão.</span>
                                            </label>
                                        </div>

                                        <div class="col-lg-12">
                                            <a id="add-endereco" class="a-link"><i>+ Adicionar Endereço</i></a>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-offset-9 col-md-offset-9 col-sm-offset-0 col-xs-offset-0">
                                            <button type="submit" name="criar" value="CRIAR CONTA" class="btn-form">SALVAR</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
include(__DIR__.'/inc.footer.php');
?>