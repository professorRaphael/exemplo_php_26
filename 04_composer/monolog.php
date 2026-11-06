<?php
require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;

$log = new Logger('aula');
$arquivo = __DIR__ . '/aula.log';
$log->pushHandler(new StreamHandler($arquivo, Level::Info));
$log->info('O programa começou.');

echo "Mensagem gravada no arquivo aula.log\n";
