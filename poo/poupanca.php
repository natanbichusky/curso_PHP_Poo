<?php


namespace Modelo\Conta;
class Poupanca extends Conta
{
public function percentualTarifa():float
{
  return 0.03;
}
}