<?php
session_start();

$f3->set('TEMP', '../tmp/');
$f3->set('DEBUG', 3);
$f3->set('AUTOLOAD', '../app/controllers/;../app/models/');
$f3->set('UI', '../app/views/');
$f3->set('DB', new DB\SQL('mysql:host=localhost;port=3306;dbname=penjualan', 'root', 'd'));

error_log("BEFOREROUTE RUNNING");