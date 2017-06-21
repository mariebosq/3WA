<?php

class DetailsController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        

        $plat_model = new PlatModel(); 
        $menu = new MenuModel();

        $menu_details = $menu->find($queryFields['id_menu']);

        $entree = $plat_model->getPlatByID($menu_details['entree']);
        $plat = $plat_model->getPlatByID($menu_details['plat']);
        $dessert = $plat_model->getPlatByID($menu_details['dessert']);

        //var_dump($entree); die;

         return [
            'entree' => $entree,
            'plat' => $plat,
            'dessert' => $dessert,
            'menu' => $menu_details
            
        ];

    }

    
}