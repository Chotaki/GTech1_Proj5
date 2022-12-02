<?php
require "../config/config.php";
$sql = "SELECT * FROM projects";
$dataBinded=array(
    ':h1'   => $_POST['h1'],
    ':p1'   => $_POST['p1'],
    ':p2'   => $_POST['p2'],
    ':p3'   => $_POST['p3'],
    ':p4'   => $_POST['p1'],
    ':img1'   => $_POST['img1'],
    ':img2'   => $_POST['img2'],
    ':img3'   => $_POST['img3'],
    ':img4'   => $_POST['img4'],
    ':span1'   => $_POST['span1'],
    ':span2'   => $_POST['span2'],
    ':span3'   => $_POST['span3'],
    ':span4'   => $_POST['span4'],
    ':a_title'   => $_POST['a_title'],
    ':a_link'   => $_POST['a_link'],
    ':h2_1'   => $_POST['h2_1'],
    ':h2_2'   => $_POST['h2_2'],
    ':h2_3'   => $_POST['h2_3'],
    ':h2_4'   => $_POST['h2_4']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$data = $pre->fetch(PDO::FETCH_ASSOC);

$sql="UPDATE projects 
    SET h1=:h1,
    span1=:span1,
    p1=:p1,
    span2=:span2,
    p2=:p2,
    span3=:span3,
    p3=:p3,
    span4=:span4,
    p4=:p4,
    img1=:img1,
    img2=:img2,
    img3=:img3,
    img4=:img4,
    a_title=:a_title,
    a_link=:a_link,
    h2_1=:h2_1,
    h2_2=:h2_2,
    h2_3=:h2_3,
    h2_4=:h2_4
    WHERE id=:id";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../panelAdmin.php');
?>