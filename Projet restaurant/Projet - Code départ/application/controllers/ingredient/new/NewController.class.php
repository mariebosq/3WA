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

        //$ing = new IngredientModel();
        //$ing->create($_POST['designation'], $_POST['type'], $_POST['stock'], $_POST['prix'], $_POST['date_peremption']);

        echo 'formulaire envoyé';
        die;

    }
