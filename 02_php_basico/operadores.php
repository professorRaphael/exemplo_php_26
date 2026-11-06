<?php
$preco = 100;
$desconto = 15;
$total = $preco - $desconto;

if ($total >= 80 && $total <= 100) {
    echo "O total está na faixa esperada.\n";
}
echo 'Total: R$ ' . $total . "\n";
// + faz contas; . concatena (junta) textos.
