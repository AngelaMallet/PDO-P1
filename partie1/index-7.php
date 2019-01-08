<?php
require 'controlers/controllerIndex-7.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="../style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
         <title>Exercice 7</title>
    </head>
    <body>

        <!--Fin du header et navbar -->
        <div class="container">
            <div class="row">
                  <div class="col s12 m12 s12">
                    <h1>Exercice 7</h1>
                    <p class="presentation">Afficher tous les clients comme ceci :</p>

                    <p><strong>Nom</strong> : Nom de famille du client</p>

                    <p><strong>Prénom </strong>: Prénom du client</p>

                    <p><strong>Date de naissance</strong> : Date de naissance du client</p>

                    <p><strong>Carte de fidélité</strong> : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)</p>

                    <p><strong>Numéro de carte</strong> : Numéro de la carte fidélité du client s'il en possède une.</p>
                </div>
                <div class="col s12 m6 l6">
                    <?php
                    // On affiche chaque entrée une à une
                    foreach ($infosArray as $infos) { ?>
                    <ul>
                        <li>Nom : <?= $infos->lastName ?></li>
                        <li>Prénom :  <?= $infos->firstName ?></li> 
                        <li>date de naissance :  <?= $infos->birthDate ?></li>
                        <li><strong>Carte de fidélité</strong> : <?= $infos->etat ?></li>
                        <li><?= $infos->etat == 'Non' ? '' : $infos->cardNumber?></li>
                    </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- fin du footer -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
</html>