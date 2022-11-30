<?php 
require_once "../config/config.php"; 
$sql = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     $_SESSION['error']=""
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
     require_once "adminCheck.php"
}

header('Location:index.php');//on le redirige sur la page d'accueil du site !
exit();
?>