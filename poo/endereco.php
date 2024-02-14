<?php
namespace Modelo;
class Endereco{
  private  $cidade;
  private  $rua;
  private  $bairro;
  private  $numero;

  public function __construct( $cidade, $rua, $bairro, $numero){
    $this->cidade = $cidade;
    $this->rua = $rua;
    $this->bairro = $bairro;
    $this->numero = $numero;
  }


  public function recuperaCidade(){
  return $this->cidade;
}


public function recuperaRua(){
  return $this->rua;
}


public function recuperaBairro(){
  return $this->bairro;
}


public function recuperaNumero(){
  return $this->numero;
}

public function __toString()
{
    return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
}
//converter a classe Endereco para string pois assim o php consegue apresentar os dados.

public function __get(string $nomeAtributo){ //para apresentar separado algum atributo da classe que
  // voce queira ao inves de apresentar tudo junto 
  $metodo = ucfirst($nomeAtributo) ;
  $metodo = 'recupera'.$metodo;
  return $this->$metodo();
}



}