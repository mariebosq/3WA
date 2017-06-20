<?php

class DetailsController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $plat = new PlatModel();
        $p_entree = $plat->getEntree();
        $p_plat = $plat->getPlat();
        $p_dessert = $plat->getDessert();


        $menu = new MenuModel();

        $menu_details = $menu->find($queryFields['id']);

        return [
            'entree' => $p_entree,
            'plat' => $p_plat,
            'dessert' => $p_dessert,
            'ingredients' => $menu_details
        ];


    }

    
}