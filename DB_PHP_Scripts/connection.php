<?php
$serverName = "localhost";
$database = "menu_SuperBurger";
$uid = '';
$pwd = '';
try {
    $conn = new PDO(
        "sqlsrv:server=$serverName;Database=$database",
        $uid,
        $pwd,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]
    );
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données " . $e->getMessage());
}
