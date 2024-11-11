<?php

$requestMethod = $_SERVER['REQUEST_METHOD'];

//if($requestMethod == 'GET') {
//
//}

$tableName = 'Currencies';

$pdo = new PDO('mysql:host=mysql;dbname=app', 'user', 'secret');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->query("SELECT * FROM $tableName WHERE ID = 1 ");
while ($row = $stmt->fetch())
{
   echo "<pre>";
    print_r($row);
   echo "</pre>";
}