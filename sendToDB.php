<?php
include("conn.php");
if(!empty($_GET['lettre'])) {
    $lettre = $_GET['lettre'];

    $sql = $conn->prepare('UPDATE lettres SET nbUtiliser = nbUtiliser + 1 WHERE lettre = :lettre');
    try {
        $donnees = array(
            'lettre' => $lettre
        );
        // Envoi de la requête avec les données
        $success = $sql->execute($donnees);
    } catch (Exception $e) {
        echo 'Erreur de requète : ', $e->getMessage();
    }
}

?>