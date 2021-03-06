<?php
session_start();

include "../php/header.php";
include "bdd.php";


if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM utilisateur WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
    <div class="container-profil page">
        <div class="espace-profil">
            <div class="titre-section-profil">
                <h2>Profil de <?php echo $userinfo['nom']; ?></h2>
            </div>
            <div class="profil-espace-infos">
                <div class="profil-titres">
                    <p>Pseudo :</p>
                    <p>Mail :</p>
                    <p>Date d'inscription :</p>
                </div>
                <div class="profil-infos">
                    <p><?php echo $userinfo['nom']; ?></p>
                    <p><?php echo $userinfo['email']; ?></p>
                    <p><?php echo $userinfo['date_inscription']; ?></p>
                </div>
            </div>
        </div>
    </div>

<?php   
}
?>



<?php
include "../php/footer.php";
?>
