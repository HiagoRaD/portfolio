<?php
$cep_origem    = trim($_POST['cep_origem']);
$cep_destino   = trim($_POST['cep_destino']);
$peso          = ($_POST['peso']);
$tipo_do_frete = ($_POST['tipo_do_frete']);
$altura        = ($_POST['altura']);
$largura       = ($_POST['largura']);
$comprimento   = ($_POST['comprimento']);


function calcular_frete($cep_origem, $cep_destino, $peso, $tipo_do_frete, $altura, $largura, $comprimento){
    
    $url  = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
    $url .= "nCdEmpresa=";
    $url .= "&sDsSenha=";
    $url .= "&nCdServico=" .$tipo_do_frete;
    $url .= "&sCepOrigem=" .$cep_origem;
    $url .= "&sCepDestino=" .$cep_destino;
    $url .= "&nVlPeso=" .$peso;
    $url .= "&nCdFormato=1";
    $url .= "&nVlComprimento=" .$comprimento;
    $url .= "&nVlAltura=" .$altura;
    $url .= "&nVlLargura=" .$largura;
    $url .= "&nVlDiametro=0";
    $url .= "&sCdMaoPropria=n";
    $url .= "&nVlValorDeclarado=0" ;
    $url .= "&sCdAvisoRecebimento=n";
    $url .= "&StrRetorno=xml";
    $url .= "&nIndicaCalculo=3";

    $xml = simplexml_load_file($url);

    return $xml->cServico;
}

$dados = calcular_frete($cep_origem, $cep_destino, $peso, $tipo_do_frete, $altura = 6, $largura = 20, $comprimento = 20);

echo $dados->Valor;
echo "_";
echo $dados->PrazoEntrega;

?>