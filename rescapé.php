<script>
    var x = document.getElementById("demo");


    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }



    if (navigator.geolocation)
        var watchId = navigator.geolocation.watchPosition(successCallback, errorCallback, {enableHighAccuracy:true});
    else
        alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");

    function successCallback(position){
        alert("Latitude : " + position.coords.latitude + ", longitude : " + position.coords.longitude);
    };

    function errorCallback(error){
        switch(error.code){
            case error.PERMISSION_DENIED:
                alert("L'utilisateur n'a pas autorisé l'accès à sa position");
                break;
            case error.POSITION_UNAVAILABLE:
                alert("L'emplacement de l'utilisateur n'a pas pu être déterminé");
                break;
            case error.TIMEOUT:
                alert("Le service n'a pas répondu à temps");
                break;
        }
    };

    function stopWatch(){
        navigator.geolocation.clearWatch(watchId);
    }



</script>
<input type="submit" value="depointage" name="depointage" style="display:inline-block;width:auto;">


<?php

/*if(isset($_POST['TEST'])){
//TT 1 image
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
        $image_extension = strrchr(basename($_FILES['image']['name']), '.');
        $fichier = time();
        move_uploaded_file($_FILES['image']['tmp_name'], $dossier . "/" . $fichier . $image_extension);

    }
    else
        //Sinon (la fonction renvoie FALSE.
    {

        echo 'Echec du téléchargement !';
    }

    //INSERER DANS LA BASE DE DONNEES

    $sql = $db->prepare( "INSERT INTO `image` (`id_Img`, `Images`, `idE`) VALUES ('', '$Images', '$idE')");
    $sql->execute();

    header("Location: ../controllers/login_page.php" ) ;
<?php echo '<img src="images/' . $donnees["images"] . '">'; ?>

    }
*/
$reponse = $db->query("SELECT * FROM image WHERE idE= 2 AND date_insertion > 86400 ORDER BY date_insertion DESC");

while ($donnees = $reponse->fetch()) {
    ?>
    <p>
        <strong> Vous avez enrégistré </strong> : <?php echo $donnees['photos']; ?>
        <button style="width: auto">Commentaire</button>

    </p>

    <?php
}
$reponse->closeCursor(); // Fin du traitement de la requête

