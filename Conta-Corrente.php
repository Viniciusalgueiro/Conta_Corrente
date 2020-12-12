<?php

function exibeMensagem(string $mensagem){
    echo $mensagem .PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array {
    if ($valorADepositar > 0) {
        $conta['Saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function sacar(array $conta, float $valorASacar): array {
    if($valorASacar > $conta['Saldo']) {
        exibeMensagem ( "Você não tem saldo suficiente");
    } else {
        $conta['Saldo'] -=$valorASacar;
    }
    return $conta;
}

$contascorrentes = [
    '123.456-78' => ['Titular' => 'vinicius',
    'Saldo' => 1000], 
    '876.543-21' => ['Titular' => 'João',
    'Saldo' => 100], 
    '132.435-678' => ['Titular' => 'Pedro',
    'Saldo' => 1000],
    124356878 => ['Titular' => 'Cintya',
    'Saldo' => 1000 ]
];

$contascorrentes['123.456-78']  = sacar(
    $contascorrentes['123.456-78'],
    500
);
$contascorrentes['132.435-678']  = sacar(
    $contascorrentes['132.435-678'],
    200
);
$contascorrentes['876.543-21']  = sacar(
    $contascorrentes['876.543-21'],
    300
);

foreach ($contascorrentes as $cpf => $conta){
    exibeMensagem($cpf ." " . $conta['Titular'] . ' '  .$conta['Saldo']);
}