<?php

namespace Modelo\Conta;

require_once 'pessoa.php';
require_once 'autenticavel.php';
use Modelo\Pessoa;
use Modelo\CPF;
use Modelo\Endereco;
use Modelo\Servico\Autenticavel;
class Titular extends Pessoa implements Autenticavel{ //pega dados da classe Pessoa
  private $endereco;
  public function __construct(CPF $cpf, string $nome, Endereco $endereco){
parent::__construct($nome,$cpf); //utiliza o construct da classe base - classe Pessoa
//permitindo deixar as variaveis de Pessoa privadas
$this->endereco = $endereco;

  }


  public function recuperaEndereco(){
    return $this->endereco;
  }

  public function podeAutenticar(string $senha):bool
  {
    return $senha === 'abcd';
  }




}