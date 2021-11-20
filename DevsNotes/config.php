<?php 
$db_host = 'localhost';
$db_name = 'devsnotes';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host:8111", $db_user, $db_pass);

$array = [
    'error' => '',
    'result' => []
];
