<?php
namespace Modelo\Func;

require_once 'funcionario.php';
require_once 'autenticavel.php';

use Modelo\Funcionario;
use Modelo\Servico\Autenticavel;

class Diretor extends Funcionario implements Autenticavel{
  public function calculaBonificacao(): float
  {
    return $this->recuperaSalario()*2;
  }

  public function podeAutenticar(string $senha): bool
  {
    return $senha === '1234';
  }
}