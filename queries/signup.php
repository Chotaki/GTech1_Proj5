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
        ':password'=> $_POST['password'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
};
header('Location: ../index.php#modal3');
exit();
?>