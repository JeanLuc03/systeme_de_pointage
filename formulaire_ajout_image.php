<?php
session_start();
include('ajout_image.php');//TT
include 'head.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="google" content="notranslate" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <script type="text/javascript" src="webtoolkit.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script><!-- execution script jquery -->
    <title>Ajout d'images</title>
</head>

<body>


<h1> VEUILLEZ AJOUTER LES IMAGES/PHOTOS DU TRAVAIL </h1>

<div>
    PLUSIEURS IMAGES
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="TEST_MULTIPLE" />
        <input type="file" name="images[]" capture multiple>
        <input type="submit" value="Valider">
    </form><br /><br />

   <!-- 1 IMAGE
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="TEST" />
        <input type="file" name="image" capture />
        <input type="submit" value="Valider">
    </form> -->
</div>

</body>
</html>