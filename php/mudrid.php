<?php
    include "../php/header_fiche.php";
    include "bdd.php";

		$tempedie = $bdd->query('SELECT * FROM tempedie WHERE nom = \'Mudrid\'');
		$stats = $bdd->query('SELECT * FROM stats WHERE nom = \'Mudrid\'');
		$capacites_temtem = $bdd->query('SELECT * FROM capacites_temtem AS ct INNER JOIN capacites c ON ct.nom_capacite = c.nom WHERE ct.nom_temtem = \'Mudrid\'');
?>

<?php
    include "../php/infos_stats.php";
?>

<?php
    include "../php/footer.php";
?>