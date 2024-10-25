<?php

$titular = "Matheus Bruno";
$saldo = 5000;
echo "*********\nTitular: $titular\nSaldo da conta: R$ " . (float) $saldo . "\n*********\n";

$opcao = 0;

while ($opcao != 4) {
    echo "\nEscolha uma das opções abaixo:\n\n";
    
    $opcoes = [
        "1. Consultar saldo atual",
        "2. Sacar valor",
        "3. Depositar valor",
        "4. Sair\n"];
    
    foreach ($opcoes as $opcao) {
        echo $opcao . "\n";
    };

    $opcao = (int) fgets(STDIN);

    if ($opcao == 1) {
        echo "\nVocê possui R$ " . (float) $saldo . " na sua conta.\n";
    }
    elseif ($opcao == 2) {
        echo "\nQuanto você gostaria de sacar? ";
        $quantia = (float) fgets(STDIN);
        if ($quantia > $saldo) {
            echo "Saldo insuficiente\n";
        } else {
            echo "Sacado: $quantia\n";
            echo "Saldo: " . ($saldo - $quantia) . "\n";
        }
    }
    elseif ($opcao == 3) {
        echo "\nQuanto você gostaria de depositar?\n";
        $deposito = (float) fgets(STDIN);
        echo "\nVocê depositou R$ $deposito." . "\nAgora você possui R$ " . ($saldo+$deposito) . "\n";
    }

} echo "Adeus\n";