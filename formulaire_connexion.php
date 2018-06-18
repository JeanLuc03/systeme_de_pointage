<h2>VEUILLEZ VOUS CONECTER</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Se connecter</button>

<div id="id01" class="modal">

    <form method="POST" class="modal-content animate" action="controllers/login_page.php">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img/logo_apprenant.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="pseudo"><b>Pseudo</b></label>
            <input class="login" type="text" placeholder="Entrer votre pseudo" name="pseudoE" required>

            <label for="mdp"><b>Password</b></label>
            <input type="password" placeholder="Entrer votre passeword" name="mdp" required>

            <input type="submit" value="connexion" name="submit">
            <label>
                <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="submit" name="submit"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw"><a href="#">Mot de passe oublié</a></span>
        </div>
    </form>
</div>