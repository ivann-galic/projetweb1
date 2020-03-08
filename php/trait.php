<?php
    include "header_bootstrap.php";
    include "bdd.php";

    $trait = $bdd->query('SELECT * FROM traits ORDER BY nom');
    if(isset($_GET['search']) AND !empty($_GET['search'])) {
        $search = htmlspecialchars($_GET['search']);
        $trait = $bdd->query('SELECT * FROM traits WHERE nom LIKE "%'.$search.'%" ORDER BY nom');
    }
    if (isset($_GET['refresh'])) {
        $trait = $bdd->query('SELECT * FROM traits ORDER BY nom');
    }

    if (isset($_GET['nameASC'])) {
        $trait = $bdd->query('SELECT * FROM traits ORDER BY nom ASC');
    }
    if (isset($_GET['nameDESC'])) {
        $trait = $bdd->query('SELECT * FROM traits ORDER BY nom DESC');
    }
?>

<div class="container container-traits page">
        <div class="row">
            <div class="center-block espace-bannière-traits">
                <img src="../imgs/traits.png" alt="Traits bannière">
            </div>
        </div>

        <div class="row col-md-12 col-lg-12 espace-form-traits">
            <form class="formulaire-recherche-traits" method="GET">
                <input id="barre-recherche-traits" class="recherche-traits" type="text" name="search" placeholder="Rechercher une attaque..." />
                <input class="btn-formulaire-recherche-traits" type="submit" value="Valider" />
                <input class="btn-formulaire-recherche-traits" type="submit" name="refresh" value="Rafraichir" />
            </form>
        </div>

    <form class="row col-md-12 col-lg-12 text-center carte-titres-traits" method="GET">
        <div class="col-1 d-inline"></div>
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
        <div class="col-8 d-inline">
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
            <div class="row col-12 align-items-center text-center carte-traits">
                <div class="col-1">
                    <p class="down"><i class="fas fa-angle-double-down"></i></p>
                </div>
                <div class="col-3 traits-nom">
                    <p><?php echo $donnees['nom'] ?> </p>
                </div>
                <div class="col-8 traits-description">
                    <p><?php echo $donnees['description'] ?> </p>
                </div>
                <div id="carte-trait-description" class="col-12 text-center carte-traits-description">
                    <div class="col-12 traits-temtem">
                        <p>Temtem possèdant le trait <?php echo $donnees['nom'] ?> :</p>
                        <?php
                        $temtemTrait = $bdd->query('SELECT te.nom FROM tempedie AS te INNER JOIN traits tr ON te.trait_1 = tr.nom WHERE te.trait_2 =\'' . addslashes($donnees['nom']) . '\' OR te.trait_1 =\'' . addslashes($donnees['nom']) . '\';');
                        if($temtemTrait->rowCount() > 0) {
                            while ($donnees = $temtemTrait->fetch()) {
                                ?>
                                </a><img class="temtem-icon-traits d-inline" src="../imgs/icons_temtem/<?php echo $donnees['nom'] ?>.png"
                                         onclick="document.location='../php/itemtem.php?nom=<?php echo $donnees['nom'] ?>'">
                                <?php
                            }
                        } else {
                            echo '<p class="erreur-aucun-temtem"><i class="fas fa-info-circle"></i> Aucun Temtem ne possède ce trait pour le moment. </p>';

                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
            $trait->closeCursor();
        }
    ?>

</div>

<?php
/*    include "../php/footer.php";
*/?>
