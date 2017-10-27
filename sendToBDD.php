<?php


include("conn.php");    // J'inclus la connexion à la BDD

    if(!empty($_GET['lettre'])) {       // Je Vérifie si la lettre envoyer en GET n'est pas vide

        $lettre = $_GET['lettre'];      // Je récupère la lettre

                                        // Dans un UPDATE j'incrémente le nombre de fois où la lettre est utiliser
        $sql = $conn->prepare('UPDATE lettres SET nbUtiliser = nbUtiliser + 1 WHERE lettre = :lettre');

        try {                           // J'essaie l'execution de la requête

            $donnees = array(           // Pour l'envoie d'une donnee

                'lettre' => $lettre     // Composer de la variable $lettre

            );

            // Envoi de la requête avec la lettre
            $success = $sql->execute($donnees);

        } catch (Exception $e) {        //Si il ne réussi pas je catch l'erreur

            echo 'Erreur de requète : ', $e->getMessage(); // que j'affiche

        }

    }

?>