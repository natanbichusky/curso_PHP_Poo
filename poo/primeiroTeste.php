<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
}

$primeiraConta = new Conta();
$primeiraConta->saldo = 200;
$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Vinicius Dias';

$segundaConta = new Conta();
$segundaConta->cpfTitular = '987.654.321-10';
$segundaConta->nomeTitular = 'Patricia';
$segundaConta->saldo = 1500;

var_dump($primeiraConta); 
var_dump($segundaConta); 