<?php 
require_once "../config/config.php"; 
$sql = "SELECT * FROM user WHERE username=':username' AND password=':password'";     
    $dataBinded=array(
        ':username'=> $_POST['username'],
        ':password'=> SHA1("NFSDJK5QLBFNDQ?KLQL122é('-(è-è_-_(@àç_è1F".$_POST['password'])
    );
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $user = $pre->fetch(PDO::FETCH_ASSOC);
if (empty($_POST["username"])){
    $_SESSION["errorlogin"]="Invalid Username";
}elseif (empty($_POST["password"])){
    $_SESSION["errorlogin"]="Invalid Password";
}else{
    $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
};

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>