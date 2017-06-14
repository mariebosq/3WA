<?php

class NewController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */


    }

    public function httpPostMethod(Http $http, array $formFields)
    {

        include 'bdd_connection.php';

        if(empty($_POST))
        {
            // Récupération de tous les ingredients du plat.
            $query =
            '
                SELECT
                    *
                FROM
                    ingredient
            ';
            $resultSet = $pdo->query($query);
            $ingredients = $resultSet->fetchAll();


            // Sélection et affichage du template PHTML.
            $template = 'add_post';
            include 'NewView.phtml';
        }
        else
        {
            // Ajout d'un ingrédient au plat.
            $query =
            '
                INSERT INTO
                    Post
                    (designation, type, stock, prix, date_peremption)
                VALUES
                    (?, ?, ?, ?, ?, NOW())
            ';
            $resultSet = $pdo->prepare($query);
            $resultSet->execute([$_POST['designation'], $_POST['type'], $_POST['stock'], $_POST['prix'], $_POST['date_peremption']]);

            // Retour à la page d'accueil une fois que le nouvel ingrédient du plat a été ajouté.
            header('Location: index.php');
            exit();
        }
        	
        }
    }
