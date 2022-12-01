<?php
require "../config/config.php";
$sql = "SELECT * FROM home";
$dataBinded=array(
    ':h1'   => $_POST['h1'],
    ':h2_1'   => $_POST['h2_1'],
    ':h2_2'   => $_POST['h2_2'],
    ':h2_3'   => $_POST['h2_3'],
    ':p1'   => $_POST['p1'],
    ':p2'   => $_POST['p2'],
    ':p3'   => $_POST['p3']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$data = $pre->fetch(PDO::FETCH_ASSOC);

$sql="UPDATE home 
    SET h1=:h1,
    h2_1=:h2_1,
    p1=:p1,
    h2_2=:h2_2,
    `p2`=:p2,
    `h2_3`=:h2_3,
    `p3`=:p3 
    WHERE 1";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../panelAdmin.php');
?>