 <?php

 class NewController

 public function httpPostMethod(Http $http, array $formFields)
    {

        $ing = new CompteClient();
        $ing->create($formFields['id_client'], $formFields['adresse'], $formFields['telephone'], $formFields['mail'], $formFields['fidelite'], $formFields['id_user']);
        
        header('Location: http://localhost:8888/3WA/Projet%20restaurant/Projet%20-%20Code%20de%CC%81part/index.php/client');

    }