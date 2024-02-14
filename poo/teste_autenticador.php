<?php

require_once 'diretor.php';
require_once 'cpf.php';
require_once 'autenticador.php';
require_once 'gerente.php';
require_once 'titular.php';
require_once 'endereco.php';

use Modelo\Func\{Diretor,Gerente};
use Modelo\Conta\Titular;
use Modelo\CPF;
use Modelo\Servico\Autenticador;
use Modelo\Endereco;

$autenticador = new Autenticador();
$diretor = new Gerente('João',new CPF('23131232133'),10000);
$titular = new Titular(new CPF('23131232133'),'João',new Endereco('bauru','jose','cruzeiro','570'));
$autenticador->tentaLogin($titular,'abcd');