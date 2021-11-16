<?php

require_once('database.php');

/** Doit contenir les méthodes pour  traiter les commentaires d'un poste
 * Rappel : Le modèle fait appel à la base de donner.
 * Il doit donc contenir les requêtes et s'occuper au maximum du traitement des données
 */

function getComments($postId){
    $pdo = initDatabse();
    $comments = $pdo->prepare('SELECT * from comments WHERE post_id=' .$postId);
    $comments->execute();
    $comments = $comments->fetchAll();
    return $comments;
}
