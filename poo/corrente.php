<?php
namespace Modelo\Conta;
class ContaCorrente extends Conta
{
  public function percentualTarifa():float
  {
  return 0.05;
  }
  public function transferir(float $valoraTransferir, Conta $contaDestino): void
{
  if ($valoraTransferir > $this->saldo){
    echo "saldo indisponível";
    return;
  }
  $this->sacar($valoraTransferir);
  $contaDestino->depositar($valoraTransferir);
}
}

