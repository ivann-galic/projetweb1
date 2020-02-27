<?php
    include "../php/header_connexion.php";
?>
<?php
    $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', 'root');


if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO utilisateur(nom, email, mdp) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

    <div class="main-container">
        <div class="espace-connexion">
            <form method="POST" action="">
                <input type="email" name="mailconnect" placeholder="Mail" />
                <input type="password" name="mdpconnect" placeholder="Mot de passe" />
                <input type="submit" name="formconnexion" value="Se connecter !" />
            </form>
            <?php
            if(isset($erreur)) {
                echo '<font color="red">'.$erreur."</font>";
            }
            ?>
        </div>

        <div class="espace-inscription">

        </div>
    </div>

<div align="center">
    <h2>Inscription</h2>
    <br /><br />
    <form method="POST" action="">
    <table>
       <tr>
          <td>
             <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
          </td>
       </tr>
       <tr>
          <td>
             <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
          </td>
       </tr>
       <tr>
          <td>
             <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
          </td>
       </tr>
       <tr>
          <td>
             <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
          </td>
       </tr>
       <tr>
          <td>
             <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
          </td>
       </tr>
       <tr>
          <td></td>
          <td align="center">
             <br />
             <input type="submit" name="forminscription" value="Je m'inscris" />
          </td>
       </tr>
    </table>
 </form>
 <?php
 if(isset($erreur)) {
    echo '<font color="red">'.$erreur."</font>";
 }
 ?>
</div>

<?php
session_start();

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ? AND mdp = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['nom'] = $userinfo['nom'];
         $_SESSION['email'] = $userinfo['email'];
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>

<!--
        <div class="banniere_liste">
            <img src="../imgs/connexion.png" alt="Liste des Temtem">
        </div>
        <div class="form">
            <form class="register-form" method="POST" action="">
                <input type="text" placeholder="Identifiant" id="pseudo" name="pseudo" />
                <input type="password" placeholder="Mot de Passe" id="password" name="password" />
                <input type="email" placeholder="Adresse mail" id="mail" name="mail" />
                <button type="register">S'inscire</button>
                <p class="message">Déjà inscrit ? <a href="#">Se connecter</a></p>
            </form>
            <form class="login-form">
                <input type="text" placeholder="Identifiant"/>
                <input type="password" placeholder="Mot de passe"/>
                <button type="submit" name="login">login</button>
                <p class="message">Pas encore inscrit ? <a href="#">Créer un compte</a></p>
            </form>
        </div>
-->

        

<?php
    include "../php/footer.php";
?>