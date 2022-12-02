<?php 
require_once "../config/config.php"; 
$sql = "SELECT * FROM user WHERE username=:username AND password=SHA1(:password)";     
    $dataBinded=array(
        ':username'=> $_POST['username'],
        ':password'=> "NFSDJK5QLBFNDQ?KLQL122é('-(è-è_-_(@àç_è1F".$_POST['password']
    );
    $pre = $pdo->prepare($sql); 
    $pre->execute($dataBinded);
    $user = $pre->fetch(PDO::FETCH_ASSOC);
  
if(empty($user)){ //vérifie si le resultat est vide !
    $_SESSION['errorlogin']= "Utilisateur ou mot de passe incorrect !";
}else{
    $_SESSION['user']= $user; //on enregistre que l'utilisateur est connecté
}

if (empty($_POST['username'])){
    $_SESSION['errorlogin']="Invalid Username";
}elseif (empty($_POST["password"])){
    $_SESSION['errorlogin']="Invalid Password";
}

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>