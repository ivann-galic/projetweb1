<?php
session_start();

include "../php/header_connexion.php";

$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', 'root');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM utilisateur WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['nom']; ?></h2>
         <br /><br />
         Pseudo = <?php echo $userinfo['nom']; ?>
         <br />
         Mail = <?php echo $userinfo['email']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
   </body>
</html>
<?php   
}
?>