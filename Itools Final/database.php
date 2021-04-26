<?php
$dsn = 'mysql:host=localhost;dbname=BCMdb';
$username = 'root';
$password = '6666sixx';

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit();
}
?>
