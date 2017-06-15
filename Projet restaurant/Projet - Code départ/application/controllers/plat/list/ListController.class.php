<?php

class ListController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $plat = new PlatModel();
        $array = $plat->getAll();

        return ['listePlats' => array_values($array)];
    }

}