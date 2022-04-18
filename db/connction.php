<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "reg";
$charset= "utf8mb4";
// Create connection
$dsn = "mysql:host=$host;dbnamae=$db;charset=;charset=$charset";
try {
$pdo = new PDO($dsn,$username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) {
  throw new PDOException($e->getMessage());
}
require_once "CRUD.php";
$crud = new CRUD($pdo);