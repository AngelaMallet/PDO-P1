<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'pda', 'pda', 
                   //toutes vos requêtes SQL qui comportent des erreurs les afficheront avec un message clair.               
                   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table clients

$reponse = $bdd->query('SELECT * FROM clients LIMIT 0, 20');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="../style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
        <title>Exercice3</title>
    </head>
    <body>

        <!--Fin du header et navbar -->
        <div class="container">
            <div class="row">
                <div class="col s12 m12 s12">
                    <h1>Exercice 3</h1>
                    <p class="presentation">Afficher les 20 premiers clients.</p>
                </div>
                <div class="col s12 m6 l6">
                    <?php
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <p>
                        <strong>Nom</strong> : <?php echo $donnees['lastName']; ?><br />
                        <strong>Prénom</strong> : <?php echo $donnees['firstName']; ?>
                    </p>
                    <?php
                    }

                    $reponse->closeCursor(); // Termine le traitement de la requête

                    ?>
                </div>
            </div>
        </div>

        <!-- fin du footer -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
</html>