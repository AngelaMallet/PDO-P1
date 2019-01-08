<?php
require 'controlers/controllerIndex-4.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="../style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
         <title>Exercice4</title>
    </head>
    <body>

        <!--Fin du header et navbar -->
        <div class="container">
            <div class="row">
                <div class="col s12 m12 s12">
                    <h1>Exercice 4</h1>
                    <p class="presentation" >N'afficher que les clients possédant une carte de fidélité.</p>
                </div>
                <div class="col s12 m6 l6">
                    <?php

                    // On affiche chaque entrée une à une
                    foreach ($clientsFidelityCardArray as $clientsCardsFidelity)
                    {
                    ?>
                    <p>
                        <strong>Nom du client </strong> : <?= $clientsCardsFidelity->firstName; ?><br />
                         
                    </p>
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