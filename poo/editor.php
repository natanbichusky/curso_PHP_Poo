<?php
namespace Modelo\Func;
use Modelo\Funcionario;
class EditorVideo extends Funcionario{
public function calculaBonificacao(): float{
  return 600;
}
}