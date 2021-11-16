<?php

require_once('models/posts.php');


/** Doit contenir les méthodes pour  traiter les postes
 * Rappel : Le controller fait appel au modèle et renvoie à la vue,
 * il n'est qu'un intermédiaire entre ces deux derniers.
 */


function getPostsListController()
{
    $posts = getPosts();
    require('views/posts.php');
}