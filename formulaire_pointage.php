<?php
include 'head.php';

include 'controllers/localisation.php';
?>


<div>

<h2>VEUILLEZ VOUS POINTER OU VOUS DEPOINTER</h2>

<form method="post" action="pointage.php">

    <div>
      <input type="hidden" name="POINTAGE" />
      <input type="hidden" name="latitude" id="LATITUDE" />
      <input type="hidden" name="longitude" id="LONGITUDE" />


      <div style="display: inline-block">

          <input type="submit" value="pointage" name="pointage" style="display:inline-block;width:auto;">
          <input type="submit" value="depointage" name="depointage" style="display:inline-block;width:auto;">

      </div>
  </form>

    <form method="post" action="../formulaire_ajout_image.php">

            <input type="submit" value="Ajout d'image" name="Ajout_image" style="display:inline-block;width:auto;">

    </form>
</div>
<div>
    <p id="demo"></p>
</div>
<script>
    var x = document.getElementById("demo");


    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);

    }
    else {
        x.innerHTML = "Votre navigateur ne prend malheureusement pas en charge la géolocalisation.";
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
        document.getElementById("LATITUDE").value=position.coords.latitude;
        document.getElementById("LONGITUDE").value=position.coords.longitude;


    }
</script>

<script>
    var xhr_object = new XMLHttpRequest();
    	xhr_object.open("GET", location.href, false);
    	xhr_object.send(null);

    	if (xhr_object.readyState == 4) alert("Vous êtes connecté à votre compte !");


</script>






