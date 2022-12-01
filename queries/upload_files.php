<?php
require_once "../config/config.php";

$destination = "upload/".$_FILES['img']['name']; //dossier "upload"
move_uploaded_file($_FILES['img']['tmp_name'],$destination);
?>