<?php
require './start.php';
require './router/Router.php';

Router::get('form', function () {
  require __DIR__ . '/views/form.php';
});

Router::post('login', function () {
  $_SESSION['user'] = 'admin';
});

Router::get('checkSession', function () {
  print_r($_SESSION);
});
