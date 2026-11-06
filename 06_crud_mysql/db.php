<?php
// Valores de exemplo apenas para o MySQL LOCAL. Ajuste-os à sua máquina.
$dsn = 'mysql:host=127.0.0.1;dbname=jogos_aula;charset=utf8mb4';
$usuario = 'root';
$senha = '';

try {
    $pdo = new PDO($dsn, $usuario, $senha, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $erro) {
    http_response_code(500);
    exit('Não foi possível conectar. Confira MySQL, banco e credenciais.');
}
