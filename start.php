<?php

use Dotenv\Dotenv;

include __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
// $dotenv->required('SESSION_NAME');
$dotenv->load();

session_name($_ENV['SESSION_NAME']);
session_start();
