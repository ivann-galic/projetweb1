<?php
    include "php/header.php";
?>

    <div class="container">

        <div class="banniere_liste">
            <img src="imgs/liste.png" alt="Liste des Temtem">
        </div>

        <div class="card_titres">

                <p>Numéro</p>
                <p>Image</p>
                <p>Nom</p>
                <p>Type 1</p>
                <p>Type 2</p>

        </div>

        <div class="card">
                <div class="tempedie_espace_numero">
                    <p>#3</p>
                </div>
                <div class="tempedie_espace_image">
                    <img src="imgs/temtem_sprites/Platypet.png" alt="Platypet">
                </div>
                <div class="tempedie_espace_nom">
                    <p>Platypet</p>
                </div>
                <div class="tempedie_espace_type1">
                        <p class="type_cristal">Cristal</p>
                </div>
                <div class="tempedie_espace_type2">
                    <p class="type_toxic">Toxic</p>
                </div>
        </div>
        <div class="card">
            <div class="tempedie_espace_numero">
                <p>#3</p>
            </div>
            <div class="tempedie_espace_image">
                <img src="imgs/temtem_sprites/Platypet.png" alt="Platypet">
            </div>
            <div class="tempedie_espace_nom">
                <p>Platypet</p>
            </div>
            <div class="tempedie_espace_type1">
                <p>Eau</p>
            </div>
            <div class="tempedie_espace_type2">
                <p>Toxic</p>
            </div>
        </div>
        <div class="card">
            <div class="tempedie_espace_numero">
                <p>#3</p>
            </div>
            <div class="tempedie_espace_image">
                <img src="imgs/temtem_sprites/Platypet.png" alt="Platypet">
            </div>
            <div class="tempedie_espace_nom">
                <p>Platypet</p>
            </div>
            <div class="tempedie_espace_type1">
                <p>Eau</p>
            </div>
            <div class="tempedie_espace_type2">
                <p>Toxic</p>
            </div>
        </div>
        <div class="card">
            <div class="tempedie_espace_numero">
                <p>#3</p>
            </div>
            <div class="tempedie_espace_image">
                <img src="imgs/temtem_sprites/Platypet.png" alt="Platypet">
            </div>
            <div class="tempedie_espace_nom">
                <p>Platypet</p>
            </div>
            <div class="tempedie_espace_type1">
                <p>Eau</p>
            </div>
            <div class="tempedie_espace_type2">
                <p>Toxic</p>
            </div>
        </div>
        <div class="card">
            <div class="tempedie_espace_numero">
                <p>#3</p>
            </div>
            <div class="tempedie_espace_image">
                <img src="imgs/temtem_sprites/Platypet.png" alt="Platypet">
            </div>
            <div class="tempedie_espace_nom">
                <p>Platypet</p>
            </div>
            <div class="tempedie_espace_type1">
                <p>Eau</p>
            </div>
            <div class="tempedie_espace_type2">
                <p>Toxic</p>
            </div>
        </div>
        <div class="card">
            <div class="tempedie_espace_numero">
                <p>#3</p>
            </div>
            <div class="tempedie_espace_image">
                <img src="imgs/temtem_sprites/Platypet.png" alt="Platypet">
            </div>
            <div class="tempedie_espace_nom">
                <p>Platypet</p>
            </div>
            <div class="tempedie_espace_type1">
                <p>Eau</p>
            </div>
            <div class="tempedie_espace_type2">
                <p>Toxic</p>
            </div>
        </div>
        <div class="card">
            <div class="tempedie_espace_numero">
                <p>#3</p>
            </div>
            <div class="tempedie_espace_image">
                <img src="imgs/temtem_sprites/Platypet.png" alt="Platypet">
            </div>
            <div class="tempedie_espace_nom">
                <p>Platypet</p>
            </div>
            <div class="tempedie_espace_type1">
                <p>Eau</p>
            </div>
            <div class="tempedie_espace_type2">
                <p>Toxic</p>
            </div>
        </div>
        <div class="card">
            <div class="tempedie_espace_numero">
                <p>#3</p>
            </div>
            <div class="tempedie_espace_image">
                <img src="imgs/temtem_sprites/Platypet.png" alt="Platypet">
            </div>
            <div class="tempedie_espace_nom">
                <p>Platypet</p>
            </div>
            <div class="tempedie_espace_type1">
                <p>Eau</p>
            </div>
            <div class="tempedie_espace_type2">
                <p>Toxic</p>
            </div>
        </div>
    </div>
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