<?php
namespace Modelo;
class CPF{
  private $numero;
  public function __construct($numero){
    $this->numero = $numero;
  }

  public function recuperaNumero()
  {
      return $this->numero;
  }
}
