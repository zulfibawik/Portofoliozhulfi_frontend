<?php
$host = getenv('DB_HOST') ?: 'mysql';
$port = (int) (getenv('DB_PORT') ?: 3306);
$database = getenv('DB_DATABASE') ?: 'portfolio_db';
$username = getenv('DB_USERNAME') ?: 'portfolio_user';
$password = getenv('DB_PASSWORD') ?: 'portfolio_pass';

$mysqli = @new mysqli($host, $username, $password, $database, $port);

header('Content-Type: text/plain; charset=UTF-8');

if ($mysqli->connect_errno) {
    http_response_code(500);
    echo "MySQLi gagal terkoneksi\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}

$result = $mysqli->query('SELECT VERSION() AS versi_mysql');
$row = $result ? $result->fetch_assoc() : ['versi_mysql' => 'tidak terbaca'];

echo "MySQLi aktif dan berhasil terkoneksi.\n";
echo "Database: {$database}\n";
echo "MySQL Version: " . $row['versi_mysql'] . "\n";
echo "PHP Version: " . PHP_VERSION . "\n";

$mysqli->close();
