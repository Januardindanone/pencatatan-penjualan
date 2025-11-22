<?php

$f3->route('GET /', function() {
    echo "rajungan";
});

$f3->route('GET /login', 'AuthController->loginPage');
$f3->route('POST /login', 'AuthController->login');
$f3->route('GET /dashboard', 'AuthController->dashboard');
$f3->route('GET /logout', 'AuthController->logout');