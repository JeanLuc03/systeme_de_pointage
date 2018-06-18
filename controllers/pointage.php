<?php

include_once "connection_BD.php";
$db = getConnection();
$idE = 1;
$date =  time();

if(isset($_POST["pointage"]))
{
    $statut = $_POST['pointage'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];


    $sql = $db->prepare( "INSERT INTO `pointage`(`idP`, `date`, `statut`, `latitude`, `longitude`, `idE`) VALUES ('', '$date', '$statut','$latitude','$longitude', '$idE')");
    $sql->execute();


    $sql = $db->prepare("update pointage set latidtude = '$latitude', longitude = '$longitude' where idE = '$idE' AND latitude = '' AND longitude = '' ");
    $sql->execute();


    echo '<script language="javascript">';
    echo 'alert("Pointage Success ")';
    echo '</script>';


    (object) ['test'];
    var_dump((object) ['test']); exit;

    header("Location: ../formulaire_ajout_image.php" ) ;

}


 else if (isset($_POST["depointage"]))
 {
     $statut = $_POST['depointage'];
     $latitude = $_POST['latitude'];
     $longitude = $_POST['longitude'];

     $sql = $db->prepare( "INSERT INTO `pointage`(`idP`, `date`, `statut`, `latitude`, `longitude`, `idE`) VALUES ('', '$date', '$statut','$latitude','$longitude', '$idE')");
     $sql->execute();
     $sql = $db->prepare("update pointage set latidtude = '$latitude', longitude = '$longitude' where idE = '$idE' AND latitude = '' AND longitude = '' ");
     $sql->execute();


     echo '<script language="javascript">';
     echo 'alert("Dépointage Success ")';
     echo '</script>';

     header("Location: ../formulaire_ajout_image.php" ) ;

 }



?>
