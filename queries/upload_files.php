<?php
require_once "../config/config.php";

$sql = "INSERT INTO projects(img1,img2,img3,img4) VALUES(:img1,:img2,:img3,:img4)";
$dataBinded=array(
    ':img1'   => $destination_img1,
    ':img2'   => $destination_img2,
    ':img3'   => $destination_img3,
    ':img4'   => $destination_img4
);

//sauvegarder le fichier dans un dossier spécifique
$destination_img1 = "img/".$_FILES['img1']['name']; //dossier "img"
move_uploaded_file($_FILES['img1']['tmp_name'],$destination_img1);

//sauvegarder le fichier dans un dossier spécifique
$destination_img2 = "img/".$_FILES['img2']['name']; //dossier "img"
move_uploaded_file($_FILES['img2']['tmp_name'],$destination_img2);

//sauvegarder le fichier dans un dossier spécifique
$destination_img3 = "img/".$_FILES['img3']['name']; //dossier "img"
move_uploaded_file($_FILES['img3']['tmp_name'],$destination_img3);

//sauvegarder le fichier dans un dossier spécifique
$destination_img4 = "img/".$_FILES['img4']['name']; //dossier "img"
move_uploaded_file($_FILES['img4']['tmp_name'],$destination_img4);

?>