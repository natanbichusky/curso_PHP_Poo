<?php 
//spl_autoload_register(function (string $nomeCompletoDaClasse){
//  $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
//   $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
 //  $caminhoArquivo .= '.php';
// 
//   if(file_exists($caminhoArquivo)) {
//       require_once $caminhoArquivo;
//   }
// });
//require_once 'autoload.php';

// esse autoloader seria para não usar tanto require once, ele automaticamente procuraria 
// require através do nome da classe que esta chamando (viraria $nomeCompletodaClasse),
// e no caso substituiria o caminho do use para o src da pasta em especifico que a classe está
// e acrescentaria o .php, com o if validaria a existencia deste caminho, se sim executaria o require once
// programacao tbm poderia ser jogada para um novo arquivo php e ser requerido neste arquivo atual
//str replace exige 2 opçoes e como o programa atual esta todo na mesma pasta não consigo realizar o mesmo



require_once 'metodos1.php';
require_once 'titular.php';
require_once 'cpf.php';
require_once 'pessoa.php';
require_once 'funcionario.php';
require_once 'endereco.php';
require_once 'diretor.php';
require_once 'corrente.php';

use Modelo\Conta\Titular;
use Modelo\CPF;
use Modelo\Endereco;
use Modelo\Funcionario;
use Modelo\Conta\Conta;
use Modelo\Func\Diretor;
use Modelo\Conta\ContaCorrente;

$endereco = new Endereco('Bauru','Maria Jose','Guedes Azevedo','563');
$primeiraConta = new ContaCorrente(new Titular(new CPF('37993037824'),'Natan Bichusky Rosica',$endereco));
var_dump($primeiraConta);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
$umFuncionario = new Diretor('Vinicius', new CPF('123.456.789-10'),'1500');
var_dump($umFuncionario);
echo 'O saldo é'.' '.$primeiraConta->recuperarSaldo().' '.PHP_EOL;
echo 'O Cpf é'.' '. $primeiraConta->recuperarCPF().PHP_EOL;
echo 'O nome é'.' '. $primeiraConta->recuperarNome().PHP_EOL;
echo 'O end é'.' '. $primeiraConta->recuperarEndereco().PHP_EOL;
echo $endereco->bairro; //teste do __get de endereco

