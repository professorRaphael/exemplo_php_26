<?php
$nome = 'Ana';
echo "Olá, $nome!\n"; // substitui a variável
echo 'Olá, $nome!' . "\n"; // imprime literalmente

echo <<<TEXTO
Bem-vinda, $nome!
Este texto ocupa mais de uma linha.
TEXTO;
