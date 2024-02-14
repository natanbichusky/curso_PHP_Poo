<?php
require_once 'funcionario.php';
require_once 'cpf.php';
require_once 'bonificacao.php';
require_once 'gerente.php';
require_once 'diretor.php';

use Modelo\{CPF,Funcionario};
use Modelo\Servico\{ControleBonificacao};
use Modelo\Func\{Gerente,Diretor};

$Funcionario = new Diretor('Chipo',new CPF('37993037824'),1000);

$Funcionario2 = new Gerente('Palmon',new CPF('37993037824'),3000);


$controlador = new ControleBonificacao();
$controlador->adicionaBonificacao($Funcionario);
$controlador->adicionaBonificacao($Funcionario2);
echo $controlador->recuperaTotal();

