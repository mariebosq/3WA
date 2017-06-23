<?php

class ListController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $ingredient = new IngredientModel();
        $array = $ingredient->getAll();

        return ['listeIngredients' => array_values($array)];
    }

}