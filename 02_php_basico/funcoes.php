<?php
function calcularTotal(float $preco, int $quantidade = 1): float
{
    return $preco * $quantidade;
}

$total = calcularTotal(12.50, 3);
echo 'Total: R$ ' . number_format($total, 2, ',', '.') . "\n";
