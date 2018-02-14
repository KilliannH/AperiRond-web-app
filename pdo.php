<?php

// docker run --name its_mysql --rm -e MYSQL_ROOT_PASSWORD="phpissocool" -e MYSQL_DATABASE="php_so_cool" -e MYSQL_USER="php" -e MYSQL_PASSWORD="php_so_cool" -d mysql
$host = 'localhost'; // localhost 127.0.0.1
$port = '3306';
$db = 'test';
$login = 'root';
$password = '';
try {
    $pdo = new PDO('mysql:host='.$host.';port='.$port. ';dbname='.$db, $login, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // Ajouter un utilisateur dans la table user
//    $pdo->exec('INSERT INTO users (email,firstname,lastname) VALUES ("boby@ouiiiii.fr","bo","by")');
    // Afficher le dernier ID
//    var_dump("Le dernier ID enregistré est : " . $pdo->lastInsertId());
    // Que pour faire des select
    $rows = $pdo->query('SELECT * FROM users');
//    while($row = $rows->fetch(PDO::FETCH_ASSOC)) {
    while($row = $rows->fetch()) {
        var_dump("Hello " . $row['firstname']);
    }
    $rows->closeCursor();
} catch (PDOException $e) {
    var_dump($e->getMessage());
} finally {
    $pdo = null;
}
var_dump("Cool ça fonctionne");
