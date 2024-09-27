<?php
require "Connexion.php";
$id = $_GET["id"];
$request = $connection->prepare("DELETE FROM utilisateur WHERE id=:id");
$request->bindParam(":id",$id,PDO::PARAM_INT);
$request->execute();
header("location:Dashboard.php");
exit();
?>