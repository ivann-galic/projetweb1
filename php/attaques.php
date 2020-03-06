<?php
    include "header_bootstrap.php";
    include "bdd.php";

    $attaque = $bdd->query('SELECT * FROM capacites');
?>

<div class="container container-attaques">
        <div class="row">
            <div class="center-block espace-bannière-attaques">
                <img src="../imgs/capacites.png" alt="Capacités bannière">
            </div>
        </div>

        <div class="row col-md-12 col-lg-12 espace-form-attaques">
            <form class="formulaire-recherche-attaques" method="GET">
                <input id="barre-recherche-attaques" class="recherche-attaques" type="text" name="search" placeholder="Rechercher une attaque..." />
                <input class="btn-formulaire-recherche-attaques" type="submit" value="Valider" />
                <input class="btn-formulaire-recherche-attaques" type="submit" name="refresh" value="Rafraichir" />
            </form>
        </div>

            <div class="row col-12 text-center carte-titres-attaques">
                <div class="col-2">
                    <p>Nom</p>
                </div>
                <div class="col">
                    <p>Type</p>
                </div>
                <div class="col">
                    <p>Catégorie</p>
                </div>
                <div class="col ">
                    <p>Puissance</p>
                </div>
                <div class="col ">
                    <p>Endurance</p>
                </div>
                <div class="col ">
                    <p>Priorité</p>
                </div>
                <div class="col ">
                    <p>Chargement</p>
                </div>
                <div class="col ">
                    <p>Synergie</p>
                </div>
            </div>

    <?php
    if($attaque->rowCount() > 0) {
        while ($donnees = $attaque->fetch()) {
            echo '
            <div class="row col-12 align-items-center text-center carte-attaque">
                <div class="col-2 attaque-nom">
                    <p>' . $donnees['nom'] . '</p>
                </div>
                <div class="col attaque-type">
                    <img class="icone_type" src="../imgs/type_sprites/'.$donnees['type'].'.png" title="'.$donnees['type'].'" >
                </div>
                <div class="col attaque-categorie">
                    <img class="icone_type" src="../imgs/icon_atk_sprites/'.$donnees['categorie'].'.png" title="'.$donnees['categorie'].'" >
                </div>
                <div class="col attaque-puissance">
                    <p>' . $donnees['puissance'] . '</p>
                </div>
                <div class="col attaque-endurance">
                    <p>' . $donnees['endurance'] . '</p>
                </div>
                <div class="col attaque-priorité">
                    <img class="icone_type" src="../imgs/icon_atk_sprites/'.$donnees['priorite'].'.png" title="'.$donnees['priorite'].'">
                </div>
                <div class="col attaque-synergie">
                    <p>' . $donnees['attente'] . '</p>
                </div>
                <div class="col attaque-attente">
                    <img class="icone_type" src="../imgs/type_sprites/'.$donnees['synergie'].'.png" title="'.$donnees['synergie'].'" >
                </div>
            </div>';
        }
            $tempedie->closeCursor();
        }
    ?>

</div>

<?php
    include "../php/footer.php";
?>
