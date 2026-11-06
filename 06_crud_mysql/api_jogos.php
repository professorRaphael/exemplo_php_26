<?php
require __DIR__ . '/db.php';

header('Content-Type: application/json; charset=utf-8');
$jogos = $pdo->query('SELECT * FROM jogos ORDER BY id DESC')->fetchAll();
echo json_encode($jogos, JSON_UNESCAPED_UNICODE);
