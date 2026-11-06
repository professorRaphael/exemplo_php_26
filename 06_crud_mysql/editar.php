<?php
require __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
} else {
    http_response_code(405);
    exit('Método não permitido.');
}
if (!$id) {
    http_response_code(400);
    exit('ID inválido.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim((string) ($_POST['nome'] ?? ''));
    $plataforma = trim((string) ($_POST['plataforma'] ?? ''));
    if ($nome === '' || $plataforma === '' ||
        mb_strlen($nome) > 100 || mb_strlen($plataforma) > 50) {
        http_response_code(422);
        exit('Preencha nome e plataforma com tamanhos válidos.');
    }
    $comando = $pdo->prepare(
        'UPDATE jogos SET nome = ?, plataforma = ? WHERE id = ?'
    );
    $comando->execute([$nome, $plataforma, $id]);
    header('Location: index.php', true, 303);
    exit;
}

$comando = $pdo->prepare('SELECT * FROM jogos WHERE id = ?');
$comando->execute([$id]);
$jogo = $comando->fetch();
if (!$jogo) {
    http_response_code(404);
    exit('Jogo não encontrado.');
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar jogo</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
<main>
  <h1>Editar jogo #<?= (int) $id ?></h1>
  <form method="post">
    <input type="hidden" name="id" value="<?= (int) $id ?>">
    <label for="nome">Nome</label>
    <input id="nome" name="nome" required maxlength="100"
      value="<?= htmlspecialchars($jogo['nome'], ENT_QUOTES, 'UTF-8') ?>">
    <label for="plataforma">Plataforma</label>
    <input id="plataforma" name="plataforma" required maxlength="50"
      value="<?= htmlspecialchars($jogo['plataforma'], ENT_QUOTES, 'UTF-8') ?>">
    <button type="submit">Salvar alteração</button>
  </form>
  <p><a href="index.php">Voltar à listagem</a></p>
</main>
</body>
</html>
