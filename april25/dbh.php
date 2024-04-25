<?php

$dsn = "mysql:host=localhost;dbname=mentalstate";
$dbusername = "root";
$dbpassword = "";


try{
    $pdo = new PDO($dsn,$dbusername,$dbpassword);
} catch (PDOEsception $e) {
    echo "Connection failed: " . $e->getMessage();
}