<?php
$host     = '0.0.0.0';
$dbName   = 'cms';
$user     = 'root';
$pass     = 'password';
$port     = '3306';
$charset  = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$dbName;charset=$charset;port=$port";
try {
    $GLOBALS['db'] = new \PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>