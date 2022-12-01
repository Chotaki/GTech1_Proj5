<?php
require_once "../config/config.php";

if(!empty($_FILES['imgp1']['name'])){
    $destination = "img/".$_FILES['img_1']['name'];
    move_uploaded_file($_FILES['img_1']['tmp_name'],$destination);
    $databinded = array(
        ':img_1' => $destination
    );
    $sql = "UPDATE home SET img_1=:img_1";
    $pre = $pdo->prepare($sql);
    $pre->execute($databinded);
};


//header('Location: ../panelAdmin.php');
?>