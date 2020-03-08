<?php
    include "header_bootstrap.php";
    include "bdd.php";

    $trait = $bdd->query('SELECT * FROM traits ORDER BY nom');
    if(isset($_GET['search']) AND !empty($_GET['search'])) {
        $search = htmlspecialchars($_GET['search']);
        $attaque = $bdd->query('SELECT * FROM traits WHERE nom LIKE "%'.$search.'%" ORDER BY nom');
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

<div class="container container-attaques page">
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
                <div class="col-9 d-inline">
                    <?php
                        if (isset($_GET['typeASC'])) {
                            echo '<input type="submit" name="typeDESC" value="Description"/>';
                        }
                        else {
                            echo '<input type="submit"  name="typeASC" value="Description"/>';
                        }
                    ?>
                </div>
                
            </form>


    <?php
    if($trait->rowCount() > 0) {
        while ($donnees = $trait->fetch()) {
            ?>
            <div class="row col-12 align-items-center text-center carte-trait">
                <div class="col-3 attaque-nom">
                    <p><?php echo $donnees['nom'] ?> </p>
                </div>
                <div class="col-9 trait-description">
                    <p><?php echo $donnees['description'] ?> </p>
                </div>
            </div>
            <?php
        }
            $trait->closeCursor();
        }
    ?>

</div>

<?php
    include "../php/footer.php";
?>
