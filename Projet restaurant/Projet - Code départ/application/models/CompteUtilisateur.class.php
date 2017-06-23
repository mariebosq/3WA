<?php

class CompteUtilisateur

{

    public function create($pseudo, $password, $nom, $prenom)

    {

        $sql = 'INSERT INTO users

        (

            pseudo,

            password,

            nom,

            prenom

        ) VALUES (?, ?, ?, ?)';



        // Insertion du produit alimentaire dans la base de données.

        $database = new Database();

        return $database->executeSql($sql,

        [


            $pseudo,

            $password,

            $nom,

            $prenom

        ]);

    }
}
