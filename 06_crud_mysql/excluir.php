<?php
require __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Método não permitido.');
}
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    http_response_code(400);
    exit('ID inválido.');
}

$comando = $pdo->prepare('DELETE FROM jogos WHERE id = ?');
$comando->execute([$id]);

header('Location: index.php', true, 303);
exit;
