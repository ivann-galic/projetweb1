<?php
session_start();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <script src="https://kit.fontawesome.com/aa1f9c66ba.js" crossorigin="anonymous"></script>
    <title>Tempedie</title>
</head>

<body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
    <script src="../js/tempedie.js"></script>
    <script src="../js/app.js"></script>
	<header>
		<nav class="barreMenu">
			<p class="btn-navigation"><i class="fas fa-bars"></i></p>
            <a href="../index.php"><img class="logo-img" src="../imgs/temtem_logo.png" alt="logo temtem"></a>
            <?php
                if ($_SESSION['nom']){
                    echo '<a href="/projetweb1/php/profil.php?id='.$_SESSION['id'].'"><button class="connexion_btn"><i class="fas fa-user"></i></button></a>
                        <a href="/projetweb1/php/deconnexion.php"><button class="deconnexion_btn"><i class="fas fa-power-off"></i></button></a>';

                }
                else{
                    echo '<a href="/projetweb1/php/connexion.php"><button class="connexion_btn"><i class="fas fa-user"></i></button></a>';
                }

            ?>
        </nav>

        <nav class="navigation">

            <div class="bgmenuSectionLiens">

                <ul>
                    <li>
                        <a class="lienBarreMenu" href="/projetweb1/index.php">Accueil</a>
                    </li>
                    <li>
                        <a class="lienBarreMenu" href="/projetweb1/php/tempedie.php">Tempedie</a>
                    </li>
                    <li>
                    	<?php 
                    		if ($_SESSION['nom']) {
                    			echo '<a class="lienBarreMenu" href="projetweb1/php/profil.php?id='.$_SESSION['id'].'">Profil</a>';
                    		}
                    		else{
                    			echo '<a class="lienBarreMenu" href="projetweb1/php/connexion.php">Connexion</a>';
                    		}
                    	?>
                        
                    </li>
                    <li>
                        <a class="lienBarreMenu" href="projetweb1/php/apropos.php">A propos</a>
                    </li>
                </ul>
            </div>

	</header>