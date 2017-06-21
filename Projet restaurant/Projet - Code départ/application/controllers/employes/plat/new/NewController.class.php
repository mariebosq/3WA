<?php

class NewController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	$categorieModel = new CategorieModel;
        $categories = $categorieModel->getAll();

        $ingredient = new IngredientModel();
        $ingredients = $ingredient->getAll();

        return [
            'listeCategorie' => array_values($categories),
            'listeIngredients' => array_values($ingredients)
        ];

    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        $plat = new PlatModel();

        // var_dump($formFields); die;

        $id = $plat->create($formFields['nom'], $formFields['prix'], $formFields['categorie']);
        $plat->get($id);

        $ingredients = $formFields['ingredients'];
        $quantities = $formFields['quantity'];

        $plat_ingredient = new PlatIngredientModel();
        $i = 0;

        foreach($ingredients as $key => $value) {
            $plat_ingredient->create($id, $value, $quantities[$i++]);
        }

        var_dump($ingredients);
        
        header('Location: http://localhost:8888/3WA/Projet%20restaurant/Projet%20-%20Code%20de%CC%81part/index.php/employes/plat/details?id='.$id);

    }
}