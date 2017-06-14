<?php

class TestController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	return ['message' => 'Hello word'];

    }
}


