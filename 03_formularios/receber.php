<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Abra formulario.html para enviar o nome.');
}

$nome = trim((string) ($_POST['nome'] ?? ''));
if ($nome === '' || mb_strlen($nome) > 80) {
    http_response_code(422);
    exit('Informe um nome com até 80 caracteres.');
}

$seguro = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
echo '<!doctype html><html lang="pt-BR"><meta charset="utf-8">';
echo '<h1>Olá, ' . $seguro . '!</h1>';
echo '<p>Seu formulário chegou ao servidor PHP.</p></html>';
