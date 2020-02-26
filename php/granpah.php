<?php
    include "../php/header._fiche.php";
?>

    <div class="container">

        <div class="card">
            <div class="fiche_espace_image">
                <img src="../imgs/temtem_sprites/Granpah.png" alt="Granpah">
            </div>

            <div class="fiche_espace_description">
                <div class="numero">
                    <p>Numéro :</p>
                    <p></p>
                </div>
                <div class="espace_nom_cri">
                    <div class="nom">
                        <p>Nom :</p>
                        <p></p>
                    </div>
                    <div class="cri">
                        <p>Cri</p>
                        <p><i class="fas fa-volume-up"></i></p>
                    </div>
                </div>

                <div class="type">
                    <p class="type_eau"></p>
                    <p class="type_toxic"></p>
                </div>

                <div class="trait">
                    <p>Traits :</p>
                    <div class="liste_traits">
                        <p></p>
                        <p></p>
                    </div>

                </div>
            </div>

            <div class="fiche_espace_stats1">
                <p>PV :</p>
                <p>Endurance :</p>
                <p>Vitesse :</p>
                <p>Attaque :</p>
                <p>Défense :</p>
                <p>Attaque Spé :</p>
                <p>Défense Spé :</p>
            </div>

            <div class="fiche_espace_stats2">
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
            </div>
        </div>

        <div class="banniere_capacités">
            <img src="../imgs/capacites.png" alt="Capacités">
        </div>

        <div class="titres_attaques">
            <div class="titre_obtention">
                <p>Méthode</p>
            </div>
            <div class="titre_niveau">
                <p>Niveau</p>
            </div>
            <div class="titre_nom_attaque">
                <p>Nom</p>
            </div>
            <div class="titre_type">
                <p>Type</p>
            </div>
            <div class="titre_categorie">
                <p>Catégorie</p>
            </div>

            <div class="titre_puissance">
                <p>Puissance</p>
            </div>
            <div class="titre_endurance">
                <p>Endurance</p>
            </div>
            <div class="titre_priorité">
                <p>Priorité</>
            </div>
            <div class="titre_chargement">
                <p>Chargement</p>
            </div>
            <div class="titre_synergie">
                <p>Synergie</p>
            </div>
        </div>

        <div class="attaque">
            <div class="attaque_caracteristiques">
                <div class="obtention">
                    <p></p>
                </div>
                <div class="niveau">
                    <p></p>
                </div>
                <div class="nom_attaque">
                    <p></p>
                </div>
                <div class="type_attaque">
                    <p></p>
                </div>
                <div class="categorie">
                    <p></p>
                </div>
                <div class="puissance">
                    <p></p>
                </div>
                <div class="endurance">
                    <p></p>
                </div>
                <div class="priorité">
                    <p></p>
                </div>
                <div class="chargement">
                    <p></p>
                </div>
                <div class="synergie">
                    <p></p>
                </div>
            </div>
            <div class="attaque_description">
                <div class="description">
                    <p></p>
                </div>
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
    include "../php/footer.php";
?>