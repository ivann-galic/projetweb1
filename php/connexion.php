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
                          $insertmbr = $bdd->prepare("INSERT INTO utilisateur(nom, email, mdp, date_inscription) VALUES(?, ?, ?, NOW())");
                         $insertmbr->execute(array($pseudo, $mail, $mdp));
                         $erreur2 = "Votre compte a bien été créé !";
                      } else {
                         $erreur2 = "Vos mots de passes ne correspondent pas !";
                      }
                   } else {
                      $erreur2 = "Adresse mail déjà utilisée !";
                   }
                } else {
                   $erreur2 = "Votre adresse mail n'est pas valide !";
                }
             } else {
                $erreur2 = "Vos adresses mail ne correspondent pas !";
             }
          } else {
             $erreur2 = "Votre pseudo ne doit pas dépasser 255 caractères !";
          }
       } else {
          $erreur2 = "Tous les champs doivent être complétés !";
       }
    }
    ?>

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
            $_SESSION['date_inscription'] = $userinfo['date_inscription'];
            header("Location: profil.php?id=".$_SESSION['id']);
        } else {
            $erreur = "Mauvais mail ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>

    <div class="main-container">
        <div class="espace-connexion">
            <p>Connexion</p>
            <form method="POST" action="">
                <input class="input-connexion" type="email" name="mailconnect" placeholder="Mail" />
                <input class="input-connexion" type="password" name="mdpconnect" placeholder="Mot de passe" />
                <input type="submit" name="formconnexion" value="Se connecter" />
            </form>
            <?php
            if(isset($erreur)) {
                echo '<font color="#c62828">'.$erreur."</font>";
            }
            ?>
        </div>

        <div class="espace-inscription">
            <p>Inscription</p>
            <form method="POST" action="">
                <input class="input-inscription" type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                <input class="input-inscription" type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                <input class="input-inscription" type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                <input class="input-inscription" type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                <input class="input-inscription" type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                <input type="submit" name="forminscription" value="Je m'inscris" />
            </form>
            <?php
            if(isset($erreur2)) {
                echo '<font color="#c62828">'.$erreur2."</font>";
            }
            ?>
        </div>
    </div>

        

<?php
    include "../php/footer.php";
?>