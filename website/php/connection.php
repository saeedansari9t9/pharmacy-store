<?php
$server = "mysql:host=localhost;dbname=mediluxe";
$username = "root";
$password = "";

try {
    $pdo = new PDO($server, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
//$pdo = new pdo ($server, $username, $password)
?>