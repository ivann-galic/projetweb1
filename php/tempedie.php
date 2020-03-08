<?php
    include "header.php";
    include "bdd.php";

    $tempedie = $bdd->query('SELECT * FROM tempedie ORDER BY numero');
	if(isset($_GET['search']) AND !empty($_GET['search'])) {
   		$search = htmlspecialchars($_GET['search']);
   		$tempedie = $bdd->query('SELECT * FROM tempedie WHERE nom LIKE "%'.$search.'%" ORDER BY numero');
   	}
   	if (isset($_GET['refresh'])) {
   		$tempedie = $bdd->query('SELECT * FROM tempedie ORDER BY numero');
   	}
    if (isset($_GET['numASC'])) {
        $tempedie = $bdd->query('SELECT * FROM tempedie ORDER BY numero ASC');
    }
    if (isset($_GET['numDESC'])) {
        $tempedie = $bdd->query('SELECT * FROM tempedie ORDER BY numero DESC');
    }
    if (isset($_GET['nameASC'])) {
        $tempedie = $bdd->query('SELECT * FROM tempedie ORDER BY nom ASC');
    }
    if (isset($_GET['nameDESC'])) {
        $tempedie = $bdd->query('SELECT * FROM tempedie ORDER BY nom DESC');
    }
    if (isset($_GET['type1ASC'])) {
        $tempedie = $bdd->query('SELECT * FROM tempedie ORDER BY type_1 ASC');
    }
    if (isset($_GET['type1DESC'])) {
        $tempedie = $bdd->query('SELECT * FROM tempedie ORDER BY type_1 DESC');
    }
    if (isset($_GET['type2ASC'])) {
        $tempedie = $bdd->query('SELECT * FROM tempedie ORDER BY type_2 ASC');
    }
    if (isset($_GET['type2DESC'])) {
        $tempedie = $bdd->query('SELECT * FROM tempedie ORDER BY type_2 DESC');
    }
?>
    <div class="container page">

        <div class="banniere_liste">
            <img src="../imgs/liste.png" alt="Liste des Temtem">
        </div>

        <div class="espace-form">
            <form class="formulaire-recherche" method="GET">
                <input id="barre-recherche" class="recherche" type="text" name="search" placeholder="Rechercher un temtem..." />
                <input class="btn-formulaire-recherche" type="submit" value="Valider" />
                <input class="btn-formulaire-recherche" type="submit" name="refresh" value="Rafraichir" />
            </form>
        </div>

        <div class="card_titres">
            <form class="formulaire-filtre" method="GET">
                <?php
                if (isset($_GET['numASC'])) {
                    echo '<input type="submit" class="btn_filtre" name="numDESC" value="Numéro"/>';
                }
                else if (isset($_GET['numDESC'])) {
                    echo '<input type="submit" class="btn_filtre" name="numASC" value="Numéro"/>';
                }
                else {
                    echo '<input type="submit" class="btn_filtre" name="numDESC" value="Numéro"/>';
                }
                ?>
                <input type="submit" id="btn_image" value="Image" onclick="disabled=true" />
                <?php
                if (isset($_GET['nameASC'])) {
                    echo '<input type="submit" class="btn_filtre" name="nameDESC" value="Nom"/>';
                }
                else {
                    echo '<input type="submit" class="btn_filtre" name="nameASC" value="Nom"/>';
                }

                if (isset($_GET['type1ASC'])) {
                    echo '<input type="submit" class="btn_filtre" name="type1DESC" value="Type 1"/>';
                }
                else {
                    echo '<input type="submit" class="btn_filtre" name="type1ASC" value="Type 1"/>';
                }

                if (isset($_GET['type2ASC'])) {
                    echo '<input type="submit" class="btn_filtre" name="type2DESC" value="Type 2"/>';
                }
                else {
                    echo '<input type="submit" class="btn_filtre" name="type2ASC" value="Type 2"/>';
                }

                ?>
            </form>
        </div>

        <?php
            if($tempedie->rowCount() > 0) {
                while ($donnees = $tempedie->fetch()) {
                    ?>
                        <div class="card" onclick="document.location='../php/itemtem.php?nom=<?php echo $donnees['nom'] ?>'">
                                <div class="tempedie_espace_numero">
                                    <p>#<?php echo $donnees['numero'] ?> </p>
                                </div>
                                <div class="tempedie_espace_image">
                                    <img src="../imgs/temtem_sprites/<?php echo $donnees['nom'] ?>.png" alt="<?php echo $donnees['nom'] ?>">
                                </div>
                                <div class="tempedie_espace_nom">
                                    <p><?php echo $donnees['nom'] ?></p>
                                </div>
                                <div class="type_espace_type">
                                        <p class="type_<?php echo $donnees['type_1'] ?>"><?php echo $donnees['type_1'] ?></p>
                                </div>
                                <div class="type_espace_">
                                        <p class="type_<?php echo $donnees['type_2'] ?>"><?php echo $donnees['type_2'] ?></p>
                                </div>
                        </div>
                <?php
                }
                $tempedie->closeCursor();
            ?> <?php } else { ?>
                <p>Aucun résultat pour: <?= $search ?>...</p>
                </div>
        <?php } ?>

<?php
    include "../php/footer.php";
?>