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




?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Conta Corrente</h1>

    <dl>
        <?php foreach($contascorrentes as $cpf => $conta) { ?>
        <dt>
            <h3> <?= $conta['Titular']; ?> - <?= $cpf; ?> </h3></dt>
        <dd>
            Saldo : <?= $conta['Saldo']; ?> 
        </dd>
        <?php } ?>
    </dl>

</body>
</html>
