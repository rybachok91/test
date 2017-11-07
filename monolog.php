<?php

// monolog
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('logger');
$log->pushHandler(new StreamHandler('logs/info.log', Logger::INFO, false));
$log->info('Сообщение');

echo "----------------------INFO:\n";
print_r(file_get_contents('logs/info.log'));

