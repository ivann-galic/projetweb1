<?php

    while ($donnees = $reponse->fetch())
        {

    ?>

    <div class="container">

        <div class="card">
            <div class="fiche_espace_image">
                <img src="../imgs/temtem_sprites/Platypet.png" alt="Platypet">
            </div>

            <div class="fiche_espace_description">
                <div class="numero">
                    <p>Numéro :</p>
                    <p><?php echo $donnees['numero']; ?></p>
                </div>

                <div class="espace_nom_cri">
                    <div class="nom">
                        <p>Nom :</p>
                        <p><?php echo $donnees['nom']; ?></p>
                    </div>
                    <div class="cri">
                        <p>Cri</p>
                        <p><i class="fas fa-volume-up"></i></p>
                    </div>
                </div>

                <div class="type">
                    <p class="type_<?php $donnees['type_1']; ?>"><?php echo $donnees['type_1']; ?></p>
                    <p class="type_toxic"><?php echo $donnees['type_2']; ?></p>
                </div>

                <div class="trait">
                    <p>Traits :</p>
                    <div class="liste_traits">
                        <p><?php echo $donnees['trait_1']; ?></p>
                        <p><?php echo $donnees['trait_2']; ?></p>
                    </div>
                    <?php }
                        $reponse->closeCursor();
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
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
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

        <div class="attaque">
            <div class="attaque_caracteristiques">
                <div class="obtention">
                    <p></p>
                </div>
                <div class="niveau">
                    <p></p>
                </div>
                <div class="nom_attaque">
                    <p></p>
                </div>
                <div class="type_attaque">
                    <p></p>
                </div>
                <div class="categorie">
                    <p></p>
                </div>
                <div class="puissance">
                    <p></p>
                </div>
                <div class="endurance">
                    <p></p>
                </div>
                <div class="priorité">
                    <p></p>
                </div>
                <div class="chargement">
                    <p></p>
                </div>
                <div class="synergie">
                    <p></p>
                </div>
            </div>
            <div class="attaque_description">
                <div class="description">
                    <p></p>
                </div>
            </div>
        </div>

    </div>