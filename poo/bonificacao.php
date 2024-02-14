<?php

namespace Modelo\Servico;
use Modelo\Funcionario;
class ControleBonificacao{
private $totalbonificacao = 0;

public function adicionaBonificacao($funcionario)
{
  $this->totalbonificacao += $funcionario->calculaBonificacao();
}

public function recuperaTotal():float{
  return $this->totalbonificacao;
}
}