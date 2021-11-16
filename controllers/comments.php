<?php

require_once('models/comments.php');
require_once('models/posts.php');


/** Doit contenir les méthodes pour  traiter les commentaires d'un poste
 * Rappel : Le controller fait appel au modèle et renvoie à la vue,
 * il n'est qu'un intermédiaire entre ces deux derniers.
 */

function getCommentsOfPostController($postId)
{
    $comments = getComments($postId);
    require('views/comments.php');
}
