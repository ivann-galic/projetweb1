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
    $tempedie = $bdd->query('SELECT * FROM tempedie WHERE nom = \'Platimous\'');
    $stats = $bdd->query('SELECT * FROM stats WHERE nom = \'Platimous\'');
	$capacites_temtem = $bdd->query('SELECT * FROM capacites_temtem AS ct INNER JOIN capacites c ON ct.nom_capacite = c.nom WHERE ct.nom_temtem = \'Platimous\'');

?>

<?php
    include "../php/infos_stats.php";
?>

<?php
    include "../php/footer.php";
?>