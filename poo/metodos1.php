<?php
namespace Modelo\Conta; //serve para organizar os códigos em "pastas" para não haver duplicidade  


abstract class Conta
{
    private $titular;
    protected $saldo = 0;
    public static $numerodeContas = 0; //static pq é referente a classe Conta e não aos objetos


public function __construct(Titular $titular){
  echo "Criando nova conta" . PHP_EOL;
  $this->titular=$titular;
  $this->saldo = 0;


  Conta::$numerodeContas++; //ao inves de digitar o nome da classe conta poderia usar "self"
  // ex Self::$numerodeContas++;

}


public function sacar(float $valoraSacar): void
{
  if ($valoraSacar > $this->saldo) // O THIS SE REFERE A AO OBJETO 
  //QUE CHAMOU A FUNÇÃO (EX SE FOR CONTA1 VAI SER ELA, SE FOR A 2 , ETC...)
{
  echo "saldo indisponivel";
  return;
}
  $this-> saldo -= $valoraSacar;
}


public function depositar(float $valoraDepositar): void
{ 
  // o void e o return excluem a necessidade
  //do else depois do if
  if($valoraDepositar <0){
    echo "Valor precisa ser maior que 0";
    return;
  }

  $this->saldo += $valoraDepositar;
}

public function recuperarSaldo(): float{
return $this->saldo;
}

public function recuperarCPF(){
  return $this->titular->recuperaCpf();
}

public function recuperarNome(){
  return $this->titular->recuperaNome();
}

public function recuperarEndereco(){
  return $this->titular->recuperaEndereco();
}


// nao consigo acessar saldo por outro arquivo devido a ser private, a função ajuda
//a obter acesso pois a função é pública

public function sacarTarifa(float $valor_Sacar):void{
$tarifa_Saque = $valor_Sacar*$this->percentualTarifa();
$valor_Saque = $valor_Sacar+$tarifa_Saque;
if($valor_Saque > $this->saldo){
  echo "Saldo indisponível";
  return;
}
$this->saldo -= $valor_Saque;
}

abstract protected function percentualTarifa():float; 




}


// se fizer outro arquivo php que utilize os dados deste como referência
// utilizar o comando: require_once 'metodos1.php'