<?php
include_once "connection_BD.php";
$db = getConnection();
$idE= 2;

if(isset($_POST['POINTAGE'])){

    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $sql = $db->prepare("update pointage set latidtude = '$latitude', longitude = '$longitude' where idE = '$idE' AND latitude = '' AND longitude = '' ");
    $sql->execute();

    echo '<script language="javascript">';
    echo 'alert("Vos coordonnées ont bien été insérées en base de données.")';
    echo '</script>';
}
?>


