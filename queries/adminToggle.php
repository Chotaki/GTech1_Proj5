<?php
require("../config/config.php");

echo $_POST['userId'];
$sql = "SELECT * FROM user WHERE id = :userId";
$dataBinded=array(
    ':userId'   => $_POST['userId']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$data = $pre->fetch(PDO::FETCH_ASSOC);

if ($data['admin'] == 0){
    $sql = "UPDATE user SET admin = 1 WHERE id = :userId";
    $dataBinded=array(
        ':userId'   => $_POST['userId']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    echo("finitruc1");
}else{
    $sql = "UPDATE user SET admin = 0 WHERE id = :userId";
    $dataBinded=array(
        ':userId'   => $_POST['userId']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    echo("finitruc2");
};
header('Location:../panelAdmin.php');
?>