<?php

class DetailsController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $plat = new PlatModel();
        $p = $plat->get($queryFields['id']);

        return ['plat' => $p ];
    }

}