<?php
require "Connexion.php";
$userName = $_POST["userName"];
$login = $_POST["login"];
$password = $_POST["password"];
$requete = $connection->prepare("INSERT INTO utilisateur(userName,email,motDePass) VALUE(?,?,?)");
$requete->bindParam(1,$userName,PDO::PARAM_STR);
$requete->bindParam(2,$login,PDO::PARAM_STR);
$requete->bindParam(3,$password,PDO::PARAM_STR);
$requete->execute();
header("location:Login.php");
exit();
?>