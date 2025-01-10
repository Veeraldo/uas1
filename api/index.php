<?php

// Forward Vercel requests to normal index.php
require __DIR__ . '/../public/index.php';
if (!file_exists($requestedFile)) {
    http_response_code(404);
    echo "Page Not Found";
    exit;
}

header('Content-Type: text/plain');

$host = 'mysql://usiqawaw1qnlbk2t:Mwdy8Tmlpcs5rhTetyKM@bw54hw69ipkgnn86isad-mysql.services.clever-cloud.com:3306/bw54hw69ipkgnn86isad';
$db = 'bw54hw69ipkgnn86isad';
$user = 'usiqawaw1qnlbk2t';
$pass = 'Mwdy8Tmlpcs5rhTetyKM';
$charset = 'utf8mb4';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Koneksi berhasil!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}

