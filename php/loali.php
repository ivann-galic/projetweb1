<?php
    include "../php/header._fiche.php";
?>

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
    $reponse = $bdd->query('SELECT * FROM tempedie WHERE nom = \'Loali\'');
    $stats = $bdd->query('SELECT * FROM stats WHERE nom = \'Loali\'');
?>

<?php
    include "../php/infos_stats.php";
?>

<?php
    include "../php/footer.php";
?>