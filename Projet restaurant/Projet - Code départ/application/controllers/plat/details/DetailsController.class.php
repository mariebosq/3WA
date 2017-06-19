<?php

class DetailsController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $plat = new PlatModel();
        $p = $plat->get($queryFields['id']);

        $plat_ingredient = new PlatIngredientModel();

        $ingredients = $plat_ingredient->getIngredients($queryFields['id']);

        return [
            'plat' => $p,
            'ingredients' => $ingredients
        ];


    }

}