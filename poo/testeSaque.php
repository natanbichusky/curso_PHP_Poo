<?php
require_once 'metodos1.php';
require_once 'titular.php';
require_once 'cpf.php';
require_once 'pessoa.php';
require_once 'funcionario.php';
require_once 'endereco.php';


use Modelo\Conta\{Titular,Conta,Poupanca,ContaCorrente};
use Modelo\{CPF, Endereco, Funcionario};

$conta = new Poupanca(
  new Titular(
      new CPF('123.456.789-10'),
      'Vinicius Dias', 
      new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
  )
);

$conta->depositar(500);
$conta->sacarTarifa(100);
echo $conta->recuperarSaldo();
