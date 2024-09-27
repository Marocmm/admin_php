<?php 
session_start();
require "Connexion.php";
if(!isset($_SESSION["login"]) && !isset($_SESSION["password"])){
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Modification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src=""></script>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["username"]) && isset($_POST["login"]) && isset($_POST["password1"]) && isset($_POST["password2"]) && $_POST["password1"] == $_POST["password2"]){
            $requete = $connection->prepare("UPDATE utilisateur set userName=?,email=?,motDePass=? WHERE id=?");
            $requete->bindParam(1,$_POST["username"],PDO::PARAM_STR);
            $requete->bindParam(2,$_POST["login"],PDO::PARAM_STR);
            $requete->bindParam(3,$_POST["password1"],PDO::PARAM_STR);
            $requete->bindParam(4,$_SESSION["id"],PDO::PARAM_STR);
            $requete->execute();
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["login"] = $_POST["login"];
            $_SESSION["password"] = $_POST["password1"];
        }else{
            header("location:Profile.php");
            exit();
        }
    }
    ?>
</head>
<body>
    <div class="main">
        <h2>USER PROFILE</h2>
        <div class="card">
            <form class="card-body" action="<?php $_SERVER['REQUEST_METHOD']?>" method="post">
                <i class="fa fa-pen fa-xs edit" onclick="enableEdit()"></i>
                <a href="Dashboard.php"><i class="fa-solid fa-arrow-left back"></i></a>
                <div id="profile">
                <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="<?php echo $_SESSION['username']?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="login" value="<?php echo $_SESSION['login']?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password1" value="<?php echo $_SESSION['password']?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="text" id="password" name="password2" value="<?php echo $_SESSION['password']?>" disabled>
                    </div>
                    <div class="row">
                    <button class="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
