<?php
require "../config/config.php";

//sauvegarder le fichier dans un dossier spécifique
$destination_img_1 = "img/".$_FILES['img_1']['name']; //dossier "img"
move_uploaded_file($_FILES['img_1']['tmp_name'],"../".$destination_img_1);

//sauvegarder le fichier dans un dossier spécifique
$destination_img_2 = "img/".$_FILES['img_2']['name']; //dossier "img"
move_uploaded_file($_FILES['img_2']['tmp_name'],"../".$destination_img_2);

//sauvegarder le fichier dans un dossier spécifique
$destination_img_3 = "img/".$_FILES['img_3']['name']; //dossier "img"
move_uploaded_file($_FILES['img_3']['tmp_name'],"../".$destination_img_3);

$sql="UPDATE home SET h1=:h1,h2_1=:h2_1,p1=:p1,h2_2=:h2_2,p2=:p2,h2_3=:h2_3,p3=:p3,img_1=:img_1,img_2=:img_2,img_3=:img_3";
$dataBinded=array(
    ':h1'   => $_POST['h1'],
    ':h2_1'   => $_POST['h2_1'],
    ':h2_2'   => $_POST['h2_2'],
    ':h2_3'   => $_POST['h2_3'],
    ':p1'   => $_POST['p1'],
    ':p2'   => $_POST['p2'],
    ':p3'   => $_POST['p3'],
    ':img_1'   => $destination_img_1,
    ':img_2'   => $destination_img_2,
    ':img_3'   => $destination_img_3
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../panelAdmin.php');
exit();
?>