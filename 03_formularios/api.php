<?php
header('Content-Type: application/json; charset=utf-8');

$jogos = [
    ['id' => 1, 'nome' => 'Celeste'],
    ['id' => 2, 'nome' => 'Hades'],
];
echo json_encode($jogos, JSON_UNESCAPED_UNICODE);
