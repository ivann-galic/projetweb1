<?php
    include "header_bootstrap.php";
    include "bdd.php";
    $attaque = $bdd->query('SELECT * FROM capacites ORDER BY nom');
    if(isset($_GET['search']) AND !empty($_GET['search'])) {
        $search = htmlspecialchars($_GET['search']);
        $attaque = $bdd->query('SELECT * FROM capacites WHERE nom LIKE "%'.$search.'%" ORDER BY nom');
    }
    if (isset($_GET['refresh'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY nom');
    }
    if (isset($_GET['puissanceASC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY puissance ASC');
    }
    if (isset($_GET['puissanceDESC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY puissance DESC');
    }
    if (isset($_GET['nameASC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY nom ASC');
    }
    if (isset($_GET['nameDESC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY nom DESC');
    }
    if (isset($_GET['typeASC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY type ASC');
    }
    if (isset($_GET['typeDESC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY type DESC');
    }
    if (isset($_GET['categorieASC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY categorie ASC');
    }
    if (isset($_GET['categorieDESC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY categorie DESC');
    }
    if (isset($_GET['enduranceASC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY endurance ASC');
    }
    if (isset($_GET['enduranceDESC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY endurance DESC');
    }
    if (isset($_GET['prioriteASC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY priorite ASC');
    }
    if (isset($_GET['prioriteDESC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY priorite DESC');
    }
    if (isset($_GET['chargementASC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY attente ASC');
    }
    if (isset($_GET['chargementDESC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY attente DESC');
    }
    if (isset($_GET['synergieASC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY synergie ASC');
    }
    if (isset($_GET['synergieDESC'])) {
        $attaque = $bdd->query('SELECT * FROM capacites ORDER BY synergie DESC');
    }
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

    <form class="row col-md-12 col-lg-12 text-center carte-titres-attaques" method="GET">
        <div class="col d-inline"></div>
        <div class="col-3 d-inline">
            <?php
                if (isset($_GET['nameASC'])) {
                    echo '<input type="submit" name="nameDESC" value="Nom"/>';
                }
                else if (isset($_GET['nameDESC'])) {
                    echo '<input type="submit" name="nameASC" value="Nom"/>';
                }
                else {
                    echo '<input type="submit"  name="nameDESC" value="Nom"/>';
                }
            ?>
        </div>
        <div class="col d-inline">
            <?php
                if (isset($_GET['typeASC'])) {
                    echo '<input type="submit" name="typeDESC" value="Type"/>';
                }
                else {
                    echo '<input type="submit"  name="typeASC" value="Type"/>';
                }
            ?>
        </div>
        <div class="col d-inline">
            <?php
                if (isset($_GET['categorieASC'])) {
                    echo '<input type="submit"  name="categorieDESC" value="Catégorie"/>';
                }
                else {
                    echo '<input type="submit"  name="categorieASC" value="Catégorie"/>';
                }
            ?>
        </div>
        <div class="col d-inline">
            <?php
                if (isset($_GET['puissanceDESC'])) {
                    echo '<input type="submit"  name="puissanceASC" value="Puissance"/>';
                }
                else {
                    echo '<input type="submit"  name="puissanceDESC" value="Puissance"/>';
                }
            ?>
        </div>
        <div class="col d-inline">
            <?php
                if (isset($_GET['enduranceASC'])) {
                    echo '<input type="submit" name="enduranceDESC" value="Endurance"/>';
                }
                else {
                    echo '<input type="submit" name="enduranceASC" value="Endurance"/>';
                }
            ?>
        </div>
        <div class="col d-inline">
            <?php
                if (isset($_GET['prioriteASC'])) {
                    echo '<input type="submit" class="" name="prioriteDESC" value="Priorité"/>';
                }
                else {
                    echo '<input type="submit" class="" name="prioriteASC" value="Priorité"/>';
                }
            ?>
        </div>
        <div class="col d-inline-block">
            <?php
                if (isset($_GET['attenteASC'])) {
                    echo '<input type="submit" class="btn_filtre-attaques" name="attenteDESC" value="Attente"/>';
                }
                else {
                    echo '<input type="submit" class="btn_filtre-attaques" name="attenteASC" value="Attente"/>';
                }
            ?>
        </div>
        <div class="col d-inline-block">
            <?php
                if (isset($_GET['synergieASC'])) {
                    echo '<input type="submit" class="btn_filtre-attaques" name="synergieDESC" value="Synergie"/>';
                }
                else {
                    echo '<input type="submit" class="btn_filtre-attaques" name="synergieASC" value="Synergie"/>';
                }
            ?>
        </div>
    </form>


    <?php
    if($attaque->rowCount() > 0) {
        while ($donnees = $attaque->fetch()) {
            ?>
            <div id="carte-attaque" class="row col-12 align-items-center text-center carte-attaque" >
                <div class="col">
                    <p class="down"><i class="fas fa-angle-double-down"></i></p>
                </div>
                <div class="col-3 attaque-nom">
                    <p><?php echo $donnees['nom']; ?> </p>
                </div>
                <div class="col attaque-type">
                    <img class="icone_type" src="../imgs/type_sprites/<?php echo $donnees['type'] ?>.png" title="<?php echo $donnees['type'] ?>" >
                </div>
                <div class="col attaque-categorie">
                    <img class="icone_type" src="../imgs/icon_atk_sprites/<?php echo $donnees['categorie'] ?>.png" title="'<?php echo $donnees['categorie'] ?>'" >
                </div>
                <div class="col attaque-puissance">
                    <p><?php
                        if ($donnees['puissance'] == 0) {
                            echo '-';
                        }
                        else{
                            echo $donnees['puissance'] ;
                        }?>
                    </p>
                </div>
                <div class="col attaque-endurance">
                    <p><?php echo $donnees['endurance'] ?></p>
                </div>
                <div class="col attaque-priorité">
                    <img class="icone_type" src="../imgs/icon_atk_sprites/<?php echo $donnees['priorite'] ?>.png" title="<?php echo $donnees['priorite'] ?>">
                </div>
                <div class="col attaque-attente">
                    <p><?php
                        if ($donnees['attente'] == 0) {
                            echo '-';
                        }
                        else{
                            echo $donnees['attente'] ;
                        }?>
                    </p>
                </div>
                <div class="col attaque-synergie">
                    <img class="icone_type" src="../imgs/type_sprites/<?php echo $donnees['synergie'] ?>.png" title="<?php echo $donnees['synergie'] ?>" >
                </div>

                <div id="carte-attaque-description" class="col-12 text-center carte-attaque-description">
                    <div class="col-12 text-left attaque-description">
                        <p>Description :</p>
                        <p><?php echo $donnees['description'] ?> </p>
                    </div>
                    <div class="col-12 attaque-temtem">
                        <p>Temtem apprenant l'attaque <?php echo $donnees['nom'] ?> :</p>
                        <?php
                        $temtemAttaque = $bdd->query('SELECT nom_temtem FROM capacites_temtem AS ct INNER JOIN capacites c ON ct.nom_capacite = c.nom WHERE c.nom =\'' . $donnees['nom'] . '\';');
                        if($attaque->rowCount() > 0) {
                            while ($donnees = $temtemAttaque->fetch()) {
                                ?>
                                </a><img class="temtem-icon-attaque d-inline" src="../imgs/icons_temtem/<?php echo $donnees['nom_temtem'] ?>.png"
                                         onclick="document.location='../php/itemtem.php?nom=<?php echo $donnees['nom_temtem'] ?>'">
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
            $temtemAttaque->closeCursor();
            $tempedie->closeCursor();
        }
    ?>

</div>

<?php
    include "../php/footer.php";
?>
