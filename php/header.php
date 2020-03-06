<?php
session_start();

$strUrl = $_SERVER['QUERY_STRING'];
$str_url = $_SERVER['PHP_SELF'];
$temtemTitle;
//si get nom existe et n'est pas vide -> title = nom
if (stristr($strUrl, 'nom=')) {
    $strNom = explode('=', $strUrl);
    $temtemTitle = $strNom[1];
}
else{
    $stringUrl = explode('/', $str_url);
    if (count($stringUrl) === 3) {
        $stringPath = $stringUrl[2];
        $stringUrl = explode('/', $str_url);
        $string_Path = explode('.', $stringPath);
        $temtemstr = $string_Path[0];
    }
    else{
        $stringPath = $stringUrl[1];
        $string_Path = explode('.', $stringPath);
        $temtemstr = $string_Path[0];
    }
switch ($temtemstr) {
    case 'index':
        $temtemTitle = 'Accueil';
        break;
    case 'tempedie':
        $temtemTitle = 'Tempedie';
        break;
    case 'attaques':
        $temtemTitle = 'Capacites';
        break;
    case 'trait':
        $temtemTitle = 'Traits';
        break; 
    case 'connexion':
        $temtemTitle = 'Connexion';
        break;
    case 'apropos':
        $temtemTitle = 'A propos';
        break;
    case 'profil':
        $temtemTitle = 'Profil';
        break;

    default:
        $temtemTitle = 'Temtem';
        break;
}

}
//else -> path 




?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet"  href="../style.css"/>
    <script src="https://kit.fontawesome.com/aa1f9c66ba.js" crossorigin="anonymous"></script>
    <title><?php echo $temtemTitle ?></title>
</head>

<body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
    <script src="../js/attaques.js"></script>
    <script src="../js/tempedie.js"></script>
    <script src="../js/app.js"></script>
	<header>
		<nav class="barreMenu">
			<p class="btn-navigation"><i class="fas fa-bars"></i></p>
            <a href="../index.php"><img class="logo-img" src="../imgs/temtem_logo.png" alt="logo temtem"></a>
            <?php
                if ($_SESSION['nom']){
                    echo '<a href="../php/profil.php?id='.$_SESSION['id'].'"><button class="connexion_btn"><i class="fas fa-user"></i></button></a>
                        <a href="../php/deconnexion.php"><button class="deconnexion_btn"><i class="fas fa-power-off"></i></button></a>';

                }
                else{
                    echo '<a href="../php/connexion.php"><button class="connexion_btn"><i class="fas fa-user"></i></button></a>';
                }

            ?>
        </nav>

        <nav class="navigation">

            <div class="bgmenuSectionLiens-sans-bootsrap">

                <ul>
                    <li>
                        <a class="lienBarreMenu-sans-bootsrap" href="<?php $_SERVER['HTTP_HOST']?>/index.php">Accueil</a>
                    </li>
                    <li>
                        <a class="lienBarreMenu-sans-bootsrap" href="<?php $_SERVER['HTTP_HOST']?>/php/tempedie.php">Tempedie</a>
                    </li>
                    <li>
                        <a id="menu-ressources-sans-bootsrap" class="lienBarreMenu" href="#"> <!--onclick="document.getElementById('displayNone').style.display = 'block'"-->Ressources</a>
                    </li>
                    <div id="displayNone-sans-bootsrap">
                        <li>
                            <a class="lienBarreMenu-sans-bootsrap lien-sans-boostrap-cache" href="<?php $_SERVER['HTTP_HOST']?>/php/attaques.php"> <i class="fas fa-angle-right"></i> Capacites</a>
                        </li>
                    </div>
                    <li>
                        <?php
                        if ($_SESSION['nom']) {
                            echo '<a class="lienBarreMenu-sans-bootsrap" href="../php/profil.php?id='.$_SESSION["id"].'">Profil</a>';
                        }
                        else{
                            echo '<a class="lienBarreMenu-sans-bootsrap" href="../php/connexion.php">Connexion</a>';
                        }
                        ?>

                    </li>
                    <li>
                        <a class="lienBarreMenu-sans-bootsrap" href="../php/apropos.php">A propos</a>
                    </li>
                </ul>
            </div>
            

	</header>