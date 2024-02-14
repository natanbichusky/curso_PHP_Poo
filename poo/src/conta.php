<?php

function criarConta(string $cpf, string $nomeTitular, string $saldo): array
{
  return [ $cpf => [ 'titular' => $nomeTitular, 'saldo' => $saldo,
  ]
];
}