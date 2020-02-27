<?php

    while ($donnees = $tempedie->fetch())
        {
    ?>

    <div class="container">

        <div class="card">
            <div class="fiche_espace_image">
                <img src="../imgs/temtem_sprites/<?php echo $donnees['nom']; ?>.gif" alt="Platypet">
            </div>

            <div class="fiche_espace_description">
                <div class="espace_numero_nom">
                    <div class="numero">
                    <p>Numéro :</p>
                    <p><?php echo $donnees['numero']; ?></p>
                </div>
                <div class="nom">
                    <p>Nom :</p>
                    <p><?php echo $donnees['nom']; ?></p>
                </div>
                </div>


                <div class="espace_nom_cri">
                    <div class="cri">
                        <p>Cri</p>
                        <audio class="lecteur" controls="controls">
                            <source src="../src/cris/<?php echo $donnees['nom']; ?>.mp3" type="audio/mp3" />
                            Votre navigateur n'est pas compatible
                        </audio>
                    </div>
                </div>

                <div class="type">
                    <p class="type_<?php echo $donnees['type_1']; ?>"><?php echo $donnees['type_1']; ?></p>
                    <p class="type_<?php echo $donnees['type_2']; ?>"><?php echo $donnees['type_2']; ?></p>
                </div>

                <div class="trait">
                    <p>Traits :</p>
                    <div class="liste_traits">
                        <p><?php echo $donnees['trait_1']; ?></p>
                        <p><?php echo $donnees['trait_2']; ?></p>
                    </div>
                    <?php }
                        $tempedie->closeCursor();
                    ?>
                </div>
            </div>
            <div class="fiche_espace_stats1">
                <p>PV : </p>
                <p>Endurance :</p>
                <p>Vitesse :</p>
                <p>Attaque :</p>
                <p>Défense :</p>
                <p>Attaque Spé :</p>
                <p>Défense Spé :</p>

            </div>

            <div class="fiche_espace_stats2">
                <?php
                while ($donnees = $stats->fetch())
                {
                    ?>
                <p><?php echo $donnees['point_de_vie']; ?></p>
                <p><?php echo $donnees['endurance']; ?></p>
                <p><?php echo $donnees['vitesse']; ?></p>
                <p><?php echo $donnees['attaque']; ?></p>
                <p><?php echo $donnees['defense']; ?></p>
                <p><?php echo $donnees['attaque_special']; ?></p>
                <p><?php echo $donnees['defense_special']; ?></p>
                <?php }
                $stats->closeCursor();
                ?>
            </div>

        </div>

        <div class="banniere_capacités">
            <img src="../imgs/capacites.png" alt="Capacités">
        </div>

        <div class="titres_attaques">
            <div class="titre_obtention">
                <p>Méthode</p>
            </div>
            <div class="titre_niveau">
                <p>Niveau</p>
            </div>
            <div class="titre_nom_attaque">
                <p>Nom</p>
            </div>
            <div class="titre_type">
                <p>Type</p>
            </div>
            <div class="titre_categorie">
                <p>Catégorie</p>
            </div>

            <div class="titre_puissance">
                <p>Puissance</p>
            </div>
            <div class="titre_endurance">
                <p>Endurance</p>
            </div>
            <div class="titre_priorité">
                <p>Priorité</>
            </div>
            <div class="titre_chargement">
                <p>Chargement</p>
            </div>
            <div class="titre_synergie">
                <p>Synergie</p>
            </div>
        </div>

        <?php
        while ($donnees = $capacites_temtem->fetch())
        {
            echo '
            <div class="attaque">

            <div class="attaque_caracteristiques">
                <div class="obtention">
                <p>' . $donnees['methode'] . '</p>
            </div>
            <div class="niveau">
                <p>' . $donnees['niveau'] . '</p>
            </div>
            <div class="nom_attaque">
                <p>' . $donnees['nom_capacite'] . '</p>
            </div>
            <div class="type_attaque">
            <img class="icone_type" src="../imgs/type_sprites/'.$donnees['type'].'.png" title="'.$donnees['type'].'" >
                </div>
                <div class="categorie">
                <img class="icone_type" src="../imgs/icon_atk_sprites/'.$donnees['categorie'].'.png" title="'.$donnees['categorie'].'" >
                </div>
                <div class="puissance">
                    <p>' . $donnees['puissance'] . '</p>
                </div>
                <div class="endurance">
                    <p>' . $donnees['endurance'] . '</p>
                </div>
                <div class="priorité">
                <img class="icone_type" src="../imgs/icon_atk_sprites/'.$donnees['priorite'].'.png" title="'.$donnees['priorite'].'">
                </div>
                <div class="chargement">
                    <p>' . $donnees['attente'] . '</p>
                </div>
                <div class="synergie">
                <img class="icone_type" src="../imgs/type_sprites/'.$donnees['synergie'].'.png" title="'.$donnees['synergie'].'" >
                </div>
            </div>
            <div class="attaque_description">
                <div class="description">
                    <p>' . $donnees['description'] . '</p>
                </div>
            </div>
        </div> ';
        }
            ?>


        <?php
        $capacites_temtem->closeCursor();
        ?>

    </div>