<?php

class CompteClient

{

    public function create($id_client, $adresse, $telephone, $mail, $fidelite, $id_user)

    {

        $sql = 'INSERT INTO menu

        (

            id_client,

            adresse,

            telephone,

            mail,

            fidelite,

            id_user

        ) VALUES (?, ?, ?, ?, ?, ?)';



        // Insertion du produit alimentaire dans la base de données.

        $database = new Database();

        return $database->executeSql($sql,

        [


            $id_client,

            $adresse,

            $telephone,

            $mail,

            $fidelite,

            $id_user

        ]);

    }
