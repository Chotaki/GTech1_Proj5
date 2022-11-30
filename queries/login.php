<?php 
require_once "../config/config.php"; 
if (empty($_POST["username"])){
    $_SESSION["error"]="Invalid Username";
}elseif (empty($_POST["password"])){
    $_SESSION["error"]="Invalid Password";
}else{
    $sql = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $user = $pre->fetch(PDO::FETCH_ASSOC);
    $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
    require_once "adminCheck.php";
};

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>