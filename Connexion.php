<?php
$local = "localhost";
$dbName = "imodeal";
$userName = "root";
$password = "Developpement 12345";
try{
    $connection = new pdo("mysql:host=".$local.";dbname=".$dbName,$userName,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>