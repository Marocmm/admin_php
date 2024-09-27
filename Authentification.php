<?php
require_once "connexion.php";
$login = $_POST["login"];
$password = $_POST["password"];
$req = "SELECT * FROM utilisateur";
$resultat = $connection->query($req);
$utilisateur = $resultat->fetchAll(pdo::FETCH_OBJ);
$count = 0;
while($count < count($utilisateur)){
    if($utilisateur[$count]->email == $login && $utilisateur[$count]->motDePass == $password){
        session_start();
        $_SESSION["id"] = $utilisateur[$count]->id;
        $_SESSION["username"] = $utilisateur[$count]->userName;
        $_SESSION["login"] = $utilisateur[$count]->email;
        $_SESSION["password"] = $utilisateur[$count]->motDePass;
        header("location:dashboard.php");
        exit();
    }
    $count++;
}
header("location:login.php");
exit();
?>