<?php

// docker run --name its_mysql --rm -e MYSQL_ROOT_PASSWORD="phpissocool" -e MYSQL_DATABASE="php_so_cool" -e MYSQL_USER="php" -e MYSQL_PASSWORD="php_so_cool" -d mysql
$host = '127.0.0.1'; // localhost
$port = '3306';
$db = 'AperiRondDB';
$login = 'root';
$password = 'root';
try {
    $pdo = new PDO('mysql:host='.$host.';port='.$port. ';dbname='.$db, $login, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo("db connected\n");
} catch (PDOException $e) {
    echo("db not connected\n");
}
