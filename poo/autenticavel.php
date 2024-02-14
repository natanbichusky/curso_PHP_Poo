<?php
namespace Modelo\Servico;
interface Autenticavel // no php nao consigo extender duas classes na mesma classe, para isso
//utilizamos interface que permite ser a classe extender várias interfaces
{
  public function podeAutenticar(string $senha):bool;
}