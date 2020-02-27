<?php
    include "header_tempedie.php";
    try
		{
			// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', 'root');
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
		        die('Erreur : '.$e->getMessage());
		}

    $tempedie = $bdd->query('SELECT * FROM tempedie');
	if(isset($_GET['search']) AND !empty($_GET['search'])) {
   		$search = htmlspecialchars($_GET['search']);
   		$tempedie = $bdd->query('SELECT * FROM tempedie WHERE nom LIKE "'.$search.'%"');
   	}
   	else if (isset($_GET['refresh'])) {
   		$tempedie = $bdd->query('SELECT * FROM tempedie');
   	}
?>
    <div class="container">

        <div class="banniere_liste">
            <img src="imgs/liste.png" alt="Liste des Temtem">
        </div>


        <form method="GET">
   			<input type="search" name="search" placeholder="Recherche..." />
   			<input type="submit" value="Valider" />
		</form>
		<form method="GET">
			<input type="submit" name="refresh" value="Rafraichir" />
		</form>

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
			echo '
		        <div class="card" onclick="document.location=\'php/'.$donnees['nom'].'.php\'">
		                <div class="tempedie_espace_numero">
		                    <p># ' . $donnees['numero'] . '</p>
		                </div>
		                <div class="tempedie_espace_image">
		                    <img src="imgs/temtem_sprites/'.$donnees['nom'].'.png" alt="Platypet">
		                </div>
		                <div class="tempedie_espace_nom">
		                    <p>' . $donnees['nom'] . '</p>
		                </div>
		                <div class="type_espace_type">
		                        <p class="type_'.$donnees['type_1'].'">' .$donnees['type_1']. '</p>
		                </div>
		                <div class="type_espace_">
		                        <p class="type_'.$donnees['type_2'].'">' . $donnees['type_2'] . '</p>
		                </div>
		        </div>
	        ';
        }
        $tempedie->closeCursor();
    } else { ?>
<p>Aucun résultat pour: <?= $search ?>...</p>
<?php } ?>
        
<!--	<div class="bdd">
	<?php
/*		try
		{
			// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', 'root');
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
		        die('Erreur : '.$e->getMessage());
		}

		// Si tout va bien, on peut continuer

		// On récupère tout le contenu de la table jeux_video
		$reponse = $bdd->query('SELECT * FROM tempedie');

		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{
	*/?>
		    <p> #
		    	<strong>
		    		<?php /*echo $donnees['numero']; */?>
		    	</strong> 
		    	: 
		    	<?php /*echo $donnees['nom']; */?>
		    	<br /> Type : <?php /*echo $donnees['type_1']; */?>
		    	/ <?php /*echo $donnees['type_2']; */?>
		     	<br />
		    </p>
		    
	<?php
/*		}

		$reponse->closeCursor(); // Termine le traitement de la requête

	*/?>
	</div>-->

<?php
    include "php/footer.php";
?>