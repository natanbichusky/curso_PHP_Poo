<?php
namespace Modelo\Servico;


use Modelo\Servico\Autenticavel;
use Modelo\Func\Diretor;


class Autenticador{
public function tentaLogin(Autenticavel $autenticavel, string $senha):void {
  {
    if ($autenticavel->podeAutenticar($senha)){
      echo "Usuário logado no sistema";
    }
    else{
      echo "Senha incorreta";
    }
  }
}
}