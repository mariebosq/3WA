<?php


class PlatIngredientModel
{

	public function create($id_plat, $id_ingredient, $quantite)

    {

        $sql = 'INSERT INTO table_ingredient_plat

        (

            id_plat,

            id_ingredient,

            quantite

        ) VALUES (?, ?, ?)';


// Insertion du produit alimentaire dans la base de données.

        $database = new Database();

        $database->executeSql($sql,

        [

            $id_plat,

            $id_ingredient,

            $quantite
            
        ]);

    }
}
   