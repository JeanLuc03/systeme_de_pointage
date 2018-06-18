<?php

include 'controllers/connection_BD.php';

$dossier = 'images';
$idE = 2;
$db = getConnection();
$date_insertion = time();

//TT plusieurs images
if(isset($_POST['TEST_MULTIPLE'])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $image) {
        $image_extension = strrchr(basename($_FILES['images']['name'][$key]), '.');
        $fichier = time() . "_" . ($key + 1);
        move_uploaded_file($image, $dossier . "/" . $fichier . $image_extension);

$photos = $fichier . $image_extension;
        //INSERER DANS LA BASE DE DONNEES
        $sql = $db->prepare( "INSERT INTO `image` (`id_img`, `date_insertion`, `photos`, `idE`) VALUES ('','$date_insertion', '$photos', '$idE')");
        $sql->execute();

        echo '<script language="javascript">';
        echo 'alert("les images ont été bien ajouté! Merci ")';
        echo '</script>';



    }

}
// permet d'afficher les insertions faites depuis le début de la journées
$heure = mktime(0,0,0,date('n'),date('j'),date('Y'));
$reponse = $db->query("SELECT * FROM image WHERE idE= 2 AND date_insertion > '$heure' ORDER BY date_insertion DESC");


while ($donnees = $reponse->fetch()) {
    ?>
    <p>
     <strong> Vous avez enrégistré </strong> : <?php echo '<img width="400" height="200" src="images/' . $donnees['photos']. '">'; ?>


        <form method="post" action="">
        <input type="hidden" name="id_img" value="<?php echo $donnees['id_img']; ?>">
        <input style="width: auto" type="text" name="notes" id="notes" placeholder="commentaires" />
        <input type="submit" name="submit" value="Enregistrer / Modifier" style="width: auto"/>
        <div>
            <strong> Voici le commentaire ajouté </strong> : <?php echo $donnees['notes']; ?>
            <div>
                <input type="submit" name="sup" value="Supprimer" style="width: auto"/>
            </div>
        </div>

    </form>
    </p>

    <?php
}

if(isset($_POST['submit'])) {

    $notes = addslashes($_POST['notes']);
    $id_img = $_POST['id_img'];


    $sql = $db->prepare("update image set notes = '$notes' where id_img = '$id_img'");
    $sql->execute();
    var_dump($sql);
    $reponse->closeCursor(); // Fin du traitement de la requête

    echo '<script language="javascript">';
    echo 'alert("Votre commentaire a bien été insérées en base de données. ")';
    echo '</script>';

}
?>
<?php

if(isset($_POST['Supprimer'])) {


    $notes = addslashes($_POST['notes']);

    $sql = $db->prepare("delete from image where notes = $notes ");
    $sql->execute();
    var_dump($sql);
    $reponse->closeCursor(); // Fin du traitement de la requête

    echo 'Votre commentaire a bien été supprimé de la base de données.';
}

?>