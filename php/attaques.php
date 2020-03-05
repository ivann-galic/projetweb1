<?php
    include "header_bootstrap.php";
    include "bdd.php";
?>

<div class="container-fluid main-container-attaques">
    <div class="container container-attaques">
        <div class="row">
            <div class="center-block espace-bannière-attaques">
                <img src="../imgs/capacites.png" alt="Capacités bannière">
            </div>
        </div>
        <div class="row">
            <div class="espace-form-attaques">
                <form class="formulaire-recherche-attaques" method="GET">
                    <input id="barre-recherche-attaques" class="recherche-attaques" type="text" name="search" placeholder="Rechercher une attaque..." />
                    <input class="btn-formulaire-recherche-attaques" type="submit" value="Valider" />
                    <input class="btn-formulaire-recherche-attaques" type="submit" name="refresh" value="Rafraichir" />
                </form>
            </div>
        </div>
    </div>
</div>

