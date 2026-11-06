<?php
require __DIR__ . '/db.php';
$jogos = $pdo->query('SELECT * FROM jogos ORDER BY id DESC')->fetchAll();
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro de jogos</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <main>
    <h1>Cadastro de jogos</h1>
    <p>Preencha os campos e clique em Cadastrar.</p>
    <form action="salvar.php" method="post">
      <label for="nome">Nome do jogo</label>
      <input id="nome" name="nome" required maxlength="100">
      <label for="plataforma">Plataforma</label>
      <input id="plataforma" name="plataforma" required maxlength="50">
      <button type="submit">Cadastrar</button>
    </form>

    <h2>Jogos cadastrados</h2>
    <?php if (count($jogos) === 0): ?>
      <p>Nenhum jogo cadastrado ainda.</p>
    <?php else: ?>
      <ul>
        <?php foreach ($jogos as $jogo): ?>
          <li>
            <span>
              <?= htmlspecialchars($jogo['nome'], ENT_QUOTES, 'UTF-8') ?>
              (<?= htmlspecialchars($jogo['plataforma'], ENT_QUOTES, 'UTF-8') ?>)
            </span>
            <a href="editar.php?id=<?= (int) $jogo['id'] ?>">Editar</a>
            <form action="excluir.php" method="post" class="inline">
              <input type="hidden" name="id" value="<?= (int) $jogo['id'] ?>">
              <button type="submit">Excluir</button>
            </form>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <a href="consultar.html">Ver consulta AJAX</a>
  </main>
</body>
</html>
