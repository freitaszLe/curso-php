<?php 

require __DIR__ . "/funcoes.php";

echo "Bem vindo ao screen match!\n";

$nomeFilme = "É assim que acaba";

$anoLancamento = 2024;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for($i = 1; $i < $argc; $i++) { 
  $notas[] = (float)$argv[$i]; 
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime =true;

$includoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maveric" => "ação",
    "Sherek" => "Comédia",
    "É assim que acaba" => "Romance",
    default => "Gênero desconhecido",
};

echo "Nome do filme: ". $nomeFilme . "\n";;
echo "Nota: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";
exibeMensagemLancamento($anoLancamento);
echo "O genero do filme é: $genero\n";

$filme = [
    'nome:' => "É assim que acaba: primeira parte",
    'ano' => "2024",
    'nota' => "7.8",
    'genero' => "romance",
];

echo $filme["ano"];

var_dump($notas);
sort($notas);//ordena
var_dump($notas);
$menorNota = min($notas);
var_dump($menorNota);

var_dump($filme['nome:']);
$posicoDoisPontos = strpos($filme['nome:'], ':');
var_dump($posicoDoisPontos);

var_dump(substr($filme['nome:'], 0, $posicoDoisPontos));
