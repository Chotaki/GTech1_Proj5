<?php 
require_once "../config/config.php"; 
if (empty($_POST["username"])){
    $_SESSION["error"]="Invalid Username";
}elseif (empty($_POST["email"])){
    $_SESSION["error"]="Invalid Email";
}elseif (empty($_POST["password"])){
    $_SESSION["error"]="Invalid Password";
}else{
    $sql = "INSERT INTO user(username,email,password) VALUES(:username,:email,:password)";
    $dataBinded=array(
        ':username'=> $_POST['username'],
        ':email'   => $_POST['email'],
        ':password'=> SHA1("NFSDJK5QLBFNDQ?KLQL122é('-(è-è_-_(@àç_è1F".$_POST['password']),
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    
    // login 
    $sql = "SELECT * FROM user WHERE username=':username' AND password=':password'";     
    $dataBinded=array(
        ':username'=> $_POST['username'],
        ':password'=> SHA1("NFSDJK5QLBFNDQ?KLQL122é('-(è-è_-_(@àç_è1F".$_POST['password']),
    );
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $user = $pre->fetch(PDO::FETCH_ASSOC);
    $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
    require_once "adminCheck.php";
};
header('Location: ../index.php');
exit();
?>