<?php
    include "../php/header_connexion.php";
?>


        <div class="banniere_liste">
            <img src="../imgs/connexion.png" alt="Liste des Temtem">
        </div>
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="name"/>
                <input type="password" placeholder="password"/>
                <input type="text" placeholder="email address"/>
                <button>S'inscire</button>
                <p class="message">Déjà inscrit ? <a href="#">Se connecter</a></p>
            </form>
            <form class="login-form">
                <input type="text" placeholder="Identifiant"/>
                <input type="password" placeholder="Mot de passe"/>
                <button>login</button>
                <p class="message">Pas encore inscrit ? <a href="#">Créer un compte</a></p>
            </form>
        </div>

<?php
    include "../php/footer.php";
?>