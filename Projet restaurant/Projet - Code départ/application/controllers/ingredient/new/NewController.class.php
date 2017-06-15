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

        $ing = new IngredientModel();
        $ing->create($formFields['designation'], $formFields['type'], $formFields['stock'], $formFields['prix'], $formFields['date_peremption']);
        
        header('Location: http://localhost:8888/3WA/Projet%20restaurant/Projet%20-%20Code%20de%CC%81part/index.php/ingredient/list');

    }
}