<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script src="https://kit.fontawesome.com/aa1f9c66ba.js" crossorigin="anonymous"></script>
	<title>CV IVANN GALIC</title>
</head>

<body>

	<header>
		<nav class="barreMenu">
			<p class="btn-navigation"><i class="fas fa-bars"></i></p>
			<input type="search" class="search" name="search" placeholder="Rechercher un Temtem, une capacité ...">
			<img class="logo-img" src="imgs/temtem_logo.png" alt="logo temtem">
		</nav>

		<nav class="navigation">

			<div class="bgmenuSectionLiens">

				<ul>
					<li>
						<a class="lienBarreMenu" href="www.google.fr">Profil</a>
					</li>
					<li>
						<a class="lienBarreMenu" href="www.google.fr">Expériences</a>
					</li>
					<li>
						<a class="lienBarreMenu" href="www.google.fr">Diplômes</a>
					</li>
					<li>
						<a class="lienBarreMenu" href="www.google.fr">Langues</a>
					</li>
					<li>
						<a class="lienBarreMenu" href="www.google.fr">Centres d'intérêts</a>
					</li>
					<li>
						<a class="lienBarreMenu" href="www.google.fr">Contact</a>
					</li>
				</ul>
			</div>

		</nav>

	</header>

	<div class="test">
	<?php
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

		// Si tout va bien, on peut continuer

		// On récupère tout le contenu de la table jeux_video
		$reponse = $bdd->query('SELECT * FROM tempedie');

		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{
	?>
		    <p> #
		    	<strong>
		    		<?php echo $donnees['numero']; ?>
		    	</strong> 
		    	: 
		    	<?php echo $donnees['nom']; ?>
		    	<br /> Type : <?php echo $donnees['type_1']; ?>
		    	/ <?php echo $donnees['type_2']; ?>
		     	<br />
		    </p>
		    
	<?php
		}

		$reponse->closeCursor(); // Termine le traitement de la requête

	?>
	</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</html>