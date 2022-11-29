<?php 
require_once "../config/config.php"; 
$sql = "INSERT INTO user(username,email,password) VALUES(:username,:email,:password)";
$dataBinded=array(
    ':username'=> $_POST['username'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');
exit();
?>