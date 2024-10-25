<?php

require __DIR__ . "/src/funcoes.php";

echo "Bem-vindo ao Screen Match!\n\n";

$filme = criaFilme(
    nome: "Thor: Ragnarok",
    anoLancamento: 2021,
    nota: 7.8,
    genero: "Fantasia"
);


$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022;
$notaFilme = 8.8;
$incluidoNoPlano = true;

echo "Filme: $nomeFilme\n";
echo "Ano de lançamento: $anoLancamento\n";
echo "Nota do filme: $notaFilme\n";
echo "Incluído no plano: $incluidoNoPlano\n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento\n";
}