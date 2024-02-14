<?php
namespace Modelo;
require_once 'pessoa.php';

 abstract class Funcionario extends Pessoa{

  public $cargo;
  private $salario;
public function __construct(string $nome,$cpf,float $salario){
  parent::__construct($nome,$cpf);
  
  $this->salario = $salario;
}





public function recuperaSalario():float {
  return $this->salario;
}

abstract public function calculaBonificacao():float; //assim toda vez que alguem extender
// a classe funcionario, sera obrigatorio a funcao calculaBonificacao

public function recebeAumento(float $valorAumento):void
{
  if($valorAumento < 0){
    echo 'Não pode ser menor que 0';
    return;
  }
  $this->salario += $valorAumento;
}
}