<?php

/**
 * Ce fichiers contient toutes les fonctions qui implémentent les traitement
 * des cas d'utilisation relatifs aux articles, par exemple :
 * — afficher une liste d'articles
 * — afficher un article particulier
 * — afficher le formulaire de création/modification d'un article
 * — etc.
 */


 /**
 * [displayListArticlesPerCategory description]
 * @param  [type] $idCategory [description]
 * @return [type]             [description]
 */
function displayListArticles ()
{
    /**
     * Première étape : collecter tous les articles dans la base
     * ... donc importer les requêtes SQL !
     */
    require_once('src/sql/articleQueries.php');
    $articles = selectAll();

    /**
     * Deuxième étape : Produire et envoyer la page HTML de la réponse
     */
    require('templates/displayArticles.html.php');
}

function displayListArticlesByCategory ($idCategory)
{

}

function displaySingleArticle ($idArticle)
{

}
