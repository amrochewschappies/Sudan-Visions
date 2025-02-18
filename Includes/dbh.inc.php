<?php

$host = 'localhost';
$dbname = 'sudan_visions';
$dbusername = 'root';
$dbpassowrd = '';

try {
    $pdo = new PDO("mysql:host=$host; db");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}