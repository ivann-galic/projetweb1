<?php
    include "header_tempedie.php";
    include "bdd.php";

    $tempedie = $bdd->query('SELECT * FROM tempedie');
	if(isset($_GET['search']) AND !empty($_GET['search'])) {
   		$search = htmlspecialchars($_GET['search']);
   		$tempedie = $bdd->query('SELECT * FROM tempedie WHERE nom LIKE "%'.$search.'%"');
   	}
   	else if (isset($_GET['refresh'])) {
   		$tempedie = $bdd->query('SELECT * FROM tempedie');
   	}
?>
    <div class="container">

        <div class="banniere_liste">
            <img src="../imgs/liste.png" alt="Liste des Temtem">
        </div>

        <div class="espace-form">
            <form class="formulaire-recherche" method="GET">
                <input type="search" name="search" placeholder="Rechercher un temtem..." />
                <input type="submit" value="Valider" />
                <input type="submit" name="refresh" value="Rafraichir" />
            </form>
        </div>


        <div class="card_titres">

                <p>Numéro</p>
                <p>Image</p>
                <p>Nom</p>
                <p>Type 1</p>
                <p>Type 2</p>

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
    } else { ?>
<p>Aucun résultat pour: <?= $search ?>...</p>
<?php } ?>

<?php
    if($tempedie->rowCount() > 1){
            include "../php/footer.php";

    }else{
    include "../php/footer2.php";
    }     
?>