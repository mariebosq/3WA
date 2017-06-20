<?php

class NewController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	$platModel = new PlatModel();

        $entrees = $platModel->getEntree();
        $plats = $platModel->getPlat();
        $desserts = $platModel->getDessert();
        $vins = $platModel->getVin();



        return [
            'listeEntrees' => array_values($entrees),
            'listePlats' => array_values($plats),
            'listeDesserts' => array_values($desserts),
            'listeVins' => array_values($vins)
        ];


    }

   public function httpPostMethod(Http $http, array $formFields)
    {
        $menu = new MenuModel();

        // var_dump($formFields); die;

        $id = $menu->create($formFields['entree'], $formFields['plat'], $formFields['dessert'], $formFields['nom_menu'], $formFields['prix_menu']);

        $menu->find($id);
        $i = 0;
            
        
        header('Location: http://localhost:8888/3WA/Projet%20restaurant/Projet%20-%20Code%20de%CC%81part/index.php/menu/details?id='.$id);

    }
}