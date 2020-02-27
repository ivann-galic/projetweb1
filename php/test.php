<?php
    include "../php/header_fiche.php";
?>

    <div class="container">

        <div class="card">
            <div class="fiche_espace_image">
                <img src="../imgs/temtem_sprites/Platypet.png" alt="Platypet">
            </div>

            <div class="fiche_espace_description">
                <div class="numero">
                    <p>Numéro :</p>
                    <p>3</p>
                </div>
                <div class="espace_nom_cri">
                    <div class="nom">
                        <p>Nom :</p>
                        <p>Platypet</p>
                    </div>
                    <div class="cri">
                        <p>Cri</p>
                        <p><i class="fas fa-volume-up"></i></p>
                    </div>
                </div>

                <div class="type">
                    <p class="type_eau">Eau</p>
                    <p class="type_toxic">Toxic</p>
                </div>

                <div class="trait">
                    <p>Traits :</p>
                    <div class="liste_traits">
                        <p>Virulent</p>
                        <p>Amphibie</p>
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
                <p>55</p>
                <p>39</p>
                <p>65</p>
                <p>45</p>
                <p>31</p>
                <p>67</p>
                <p>56</p>
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
                    <p>Niveau</p>
                </div>
                <div class="niveau">
                    <p>1</p>
                </div>
                <div class="nom_attaque">
                    <p>Claque-nageoire</p>
                </div>
                <div class="type_attaque">
                    <p>Neutre</p>
                </div>
                <div class="categorie">
                    <p>Phys</p>
                </div>
                <div class="puissance">
                    <p>32</p>
                </div>
                <div class="endurance">
                    <p>4</p>
                </div>
                <div class="priorité">
                    <p>3</p>
                </div>
                <div class="chargement">
                    <p>0</p>
                </div>
                <div class="synergie">
                    <p>Vent</p>
                </div>
            </div>
            <div class="attaque_description">
                <div class="description">
                    <p>La capacité Claque-nageoire cible un seul Temtem. La cible peut être tous les Temtem sur le terrain, sauf le lanceur de la capacité.</p>
                </div>
            </div>
        </div>

        <div class="attaque">
            <div class="attaque_caracteristiques">
                <div class="obtention">
                    <p>Niveau</p>
                </div>
                <div class="niveau">
                    <p>1</p>
                </div>
                <div class="nom_attaque">
                    <p>Claque-nageoire</p>
                </div>
                <div class="type_attaque">
                    <p>Neutre</p>
                </div>
                <div class="categorie">
                    <p>Phys</p>
                </div>
                <div class="puissance">
                    <p>32</p>
                </div>
                <div class="endurance">
                    <p>4</p>
                </div>
                <div class="priorité">
                    <p>3</p>
                </div>
                <div class="chargement">
                    <p>0</p>
                </div>
                <div class="synergie">
                    <p>Vent</p>
                </div>
            </div>
            <div class="attaque_description">
                <div class="description">
                    <p>La capacité Claque-nageoire cible un seul Temtem. La cible peut être tous les Temtem sur le terrain, sauf le lanceur de la capacité.</p>
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