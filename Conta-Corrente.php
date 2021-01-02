<?php
require 'funcoes.php';

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

unset ($contascorrentes ['132.435-678']);


echo "<ul>";
foreach ($contascorrentes as $cpf => $conta){
    exibeConta($conta);       
}
echo "</ul>";