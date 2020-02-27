<?php
session_start();


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/fiche_temtem.css"/>
	<script src="https://kit.fontawesome.com/aa1f9c66ba.js" crossorigin="anonymous"></script>
	<title>Fiche Temtem</title>
</head>

<body>

	<header>
		<nav class="barreMenu">
			<p class="btn-navigation"><i class="fas fa-bars"></i></p>
            <a href="../index.php"><img class="logo-img" src="../imgs/temtem_logo.png" alt="logo temtem"></a>
            <?php
                if ($_SESSION['nom']){
                    echo '<a href="php/profil.php?id='.$_SESSION['id'].'"><button class="connexion_btn"><i class="fas fa-user"></i></button></a>
                        <a href="deconnexion.php"><button class="deconnexion_btn"><i class="fas fa-power-off"></i></button></a>';

                }
                else{
                    echo '<a href="connexion.php"><button class="connexion_btn"><i class="fas fa-user"></i></button></a>';
                }

            ?>
        </nav>

        <nav class="navigation">

            <div class="bgmenuSectionLiens">

                <ul>
                    <li>
                        <a class="lienBarreMenu" href="../index.php">Accueil</a>
                    </li>
                    <li>
                        <a class="lienBarreMenu" href="../php/tempedie.php">Tempedie</a>
                    </li>
                    <li>
                        <?php 
                            if ($_SESSION['nom']) {
                                echo '<a class="lienBarreMenu" href="profil.php?id='.$_SESSION['id'].'">Profil</a>';
                            }
                            else{
                                echo '<a class="lienBarreMenu" href="connexion.php">Connexion</a>';
                            }
                        ?>
                    </li>
                    <li>
                        <a class="lienBarreMenu" href="../php/apropos.php">A propos</a>
                    </li>
                </ul>
            </div>

	</header>