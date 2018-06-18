<?php


require('connection_BD.php');

include '../pointer.php';

if(isset($_POST["submit"])) {

    $db = getConnection();


    extract($_POST);
    $pseudoE = $_POST['pseudoE'];
    $mdp = $_POST['mdp'];

    $req = $db->prepare("SELECT * FROM employe WHERE pseudoE ='$pseudoE' AND mdp = '$mdp' ");

    $req->execute();


    $resultat = $req->fetch();


     if ($resultat <=0 ) {
         echo 'Vos identifiants sont incorrects !';
     }
     else if ($resultat >= 1) {
         $_SESSION['pseudoE'] = $pseudoE;


     }

else {
        echo '<div class="error-login">Veuillez remplir tous les champs !</div>';
    }
 }



