<?php

/**
 * Ce fichier contient spécifiquement les requêtes SQL vers la base de données
 * concernant les articles.
 *
 */

/**
 * selectAll retourne une requête pour trouver la liste des tous les aticles
 * @return PDOStatement requête préparée pour la collecte de tous les articles
 */
function selectAll()
{
     /**
      * formululation de base de la requête qui ne prend pas en compte ce qui est relatif
      * aux données liées (catégories, etc.)
      */
    return ($db->prepare('SELECT * FROM `articles` WHERE 1'))->execute();

}

/**
 * selectByCategory retourne la liste de tous les articles d'une certaine catégorie
 * @param  int   $idCategory identifiant de la catégorie
 * @return array             liste des articles
 */
function selectByCategory($idCategory)
{
     /**
      * formulation de base de la requête qui ne prend pas en compte ce qui est relatif
      * aux données liées (catégories, etc.)
      */
    return ($db->prepare('SELECT * FROM `articles` WHERE `id_category` = ?'))->execute([$idCategory]);

}

function insertArticle(array $columns)
{
    # code...
}

function deleteArticle ($idArticle)
{
    # code...
}
