<?php

use Dotenv\Dotenv;

include_once 'globals.php';
include __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
echo $_ENV['SESSION_NAME'];

session_start();
print_r($_SESSION);
if (isset($_SESSION['admin'])) {
  print_r($_SESSION['admin']);
} else {
  echo 'Se necesita ser admin';
}

session_destroy();
