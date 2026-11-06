<?php
$nomes = ['Ana', 'Bia', 'Caio'];
echo $nomes[0] . "\n";  // Ana

$jogo = ['nome' => 'Celeste', 'ano' => 2018];
echo $jogo['nome'] . "\n";

foreach ($nomes as $nome) {
    echo "Olá, $nome!\n";
}
