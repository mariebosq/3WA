<?php

class ListemenuController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        
        $plat_model = new PlatModel(); 
        $menu = new MenuModel();
        $commandes = $menu->listAll();

        $entrees = $plat_model->getEntree();
        $desserts = $plat_model->getDessert();
        $plats = $plat_model->getPlat();

        //var_dump($commande); die;

         return [
            'entrees' => $entrees,
            'plats' => $plats,
            'desserts' => $desserts,
            'commandes' => $commandes
            ];

    }
}