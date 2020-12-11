<?php

$contascorrentes = [
    '123.456.789-10' => [
        'titular' => 'leandro',
        'saldo' => 180000
    ],
    '123.456.789-11' => [
        'titular' => 'carol',
        'saldo' => 10000
    ],
    '123.456.789-12' => [
        'titular' => 'francisco',
        'saldo' => 3000
    ],
];
function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array
{
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    }else {
        exibeMensagem("Depositos precisa ser positivo");
    }

    return $conta;
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

$contascorrentes['123.456.789-10'] = sacar(
    $contascorrentes['123.456.789-10'],
    500
);

$contascorrentes['123.456.789-11'] = sacar(
    $contascorrentes['123.456.789-11'],
    200
);

$contascorrentes['123.456.789-12'] = depositar(
    $contascorrentes['123.456.789-12'],
    3000
);

foreach ($contascorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}