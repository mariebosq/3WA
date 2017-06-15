<?php

class NewController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	$categorieModel = new CategorieModel;
        $array = $categorieModel->getAll();

        return ['listeCategorie' => array_values($array)];


    }

    public function httpPostMethod(Http $http, array $formFields)
    {

        $plat = new PlatModel();
        $plat->create($formFields['nom'], $formFields['prix'], $formFields['categorie']);

        
        header('Location: http://localhost:8888/3WA/Projet%20restaurant/Projet%20-%20Code%20de%CC%81part/index.php/plat/list');

    }
}