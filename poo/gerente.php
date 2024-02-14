<?php

namespace Modelo\Func;
use Modelo\Funcionario;
use Modelo\Servico\Autenticavel;

class Gerente extends Funcionario implements Autenticavel{
public function calculaBonificacao():float
{
  return $this->recuperaSalario();
}
public function podeAutenticar(string $senha):bool
{
  return $senha === '4321';
}
}
