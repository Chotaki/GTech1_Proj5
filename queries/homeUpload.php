<?php
require_once "../config/config.php";

echo ($_POST['imgradio']);
$destination = 'img/'.$_FILES['image']['name']; //dossier "img"
move_uploaded_file($_FILES['image']['tmp_name'],$destination);





/*
if ($_POST['imgradio']=='1mg'){
    $sql = "UPDATE home SET img_1 = :imglocation WHERE 1";
    $dataBinded=array(
        ':imglocation'   => $destination
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

}else if($_POST['imgradio']=='2mg'){
    $sql = "UPDATE home SET img_2 = :imglocation WHERE 1";
    $dataBinded=array(
        ':imglocation'   => $destination
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

}else if($_POST['imgradio']=='3mg'){
    $sql = "UPDATE home SET img_3 = :imglocation WHERE 1";
    $dataBinded=array(
        ':imglocation'   => $destination
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

};
*/

//header('Location: ../panelAdmin.php');
?>