<?php

class IngredientModel {

	public function create($designation, $type, $stock, $prix, $date_peremption)

    {

        $sql = 'INSERT INTO ingredient

        (

            designation,

            type,

            stock,

            prix,

            date_peremption

        ) VALUES (?, ?, ?, ?, ?)';


// Insertion du produit alimentaire dans la base de données.

        $database = new Database();

        $database->executeSql($sql,

        [

            $designation,

            $type,

            $stock,

            $prix,

            $date_peremption

        ]);

    }

   