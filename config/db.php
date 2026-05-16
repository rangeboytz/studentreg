<?php
// Kuchukua connection details kutoka environment variables za Railway
$host = getenv('MYSQLHOST') ?: getenv('DB_HOST') ?:'localhost';
$dbname = getenv('MYSQLDATABASE') ?: getenv('DB_HOST') ?:'student_system';
$username = getenv('MYSQLUSER') ?:getenv('DB_HOST') ?: 'root';
$password = getenv('MYSQLPASSWORD') ?: getenv('DB_HOST') ?:'';
$port = getenv('MYSQLPORT') ?:8080;


try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>