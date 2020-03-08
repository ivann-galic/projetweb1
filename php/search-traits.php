<?php
$term=$_GET['term'];
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
$requete = $bdd->prepare('select nom from traits where nom like :term'); // j'effectue ma requête SQL grâce au mot-clé LIKE
$requete->execute(array('term' => '%'.$term.'%'));

$array = array(); // on créé le tableau

while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
{
    array_push($array, $donnee['nom']); // et on ajoute celles-ci à notre tableau
}

echo json_encode($array); // il n'y a plus qu'à convertir en JSON
?>
