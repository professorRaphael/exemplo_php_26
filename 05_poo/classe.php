<?php
class Jogo
{
    public string $nome;
    public string $plataforma;

    public function apresentar(): string
    {
        return "$this->nome ($this->plataforma)";
    }
}

$jogo = new Jogo();
$jogo->nome = 'Celeste';
$jogo->plataforma = 'PC';
echo $jogo->apresentar() . "\n";
