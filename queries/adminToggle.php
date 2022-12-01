<?php
require("../config/config.php");

$sql = "SELECT * FROM user WHERE id = '".$_POST['userId']."'"; //votre requêtes SQL (vous savez faire maintenant héhé !)
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute();//on l'execute
$data = $pre->fetch(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)

if ($data['admin'] == 0){
    $sql= "UPDATE user SET admin = 1 WHERE id = '".$_POST['userId']."'";
    $pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
    $pre->execute();//on l'execute
    echo("finitruc1");
}else{
    $sql= "UPDATE user SET admin = 0 WHERE id = '".$_POST['userId']."'";
    $pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
    $pre->execute();//on l'execute
    echo("finitruc2");
};
//header('Location:../panelAdmin.php');
?>