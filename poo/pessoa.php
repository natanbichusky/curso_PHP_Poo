<?php
namespace Modelo;
abstract class Pessoa{  //o que utilizamos são os derivados de pessoa (Natan, Chipo...) assim
  //como na classe Funcionario (Gerente,Diretor...), por isso são classes abstratas
  protected $nome; //protected algo entre o public e private, permite acesso na classe "mãe" e nas "filhas"
  private $cpf;

  public function __construct(string $nome,CPF $cpf){
    
    $this->validaNomeTitular($nome);
    $this->nome=$nome;
    $this->cpf=$cpf;
  }

  public function recuperaNome(){
    return $this->nome;
  }

  public function recuperaCpf(){
    return $this->cpf->recuperaNumero();
  }

  public function validaNomeTitular(string $nomeTitular){
    if(strlen($nomeTitular)<5){
      echo "Nome precisa ter pelo menos 5 caracteres";
    exit();
    }
  }
}