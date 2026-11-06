<?php
require __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Método não permitido.');
}

$nome = trim((string) ($_POST['nome'] ?? ''));
$plataforma = trim((string) ($_POST['plataforma'] ?? ''));
if ($nome === '' || $plataforma === '' ||
    mb_strlen($nome) > 100 || mb_strlen($plataforma) > 50) {
    http_response_code(422);
    exit('Informe nome (até 100) e plataforma (até 50 caracteres).');
}

$sql = 'INSERT INTO jogos (nome, plataforma) VALUES (?, ?)';
$comando = $pdo->prepare($sql);
$comando->execute([$nome, $plataforma]);

header('Location: index.php', true, 303);
exit;
