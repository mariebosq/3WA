<?php


class PlatIngredientModel
{

    public function getIngredients($id_plat) {
        $sql = '
            SELECT ingredient.designation
            FROM ingredient
            INNER JOIN table_ingredient_plat
            WHERE table_ingredient_plat.id_ingredient = ingredient.id_ingredient
            AND table_ingredient_plat.id_plat = ?
        ';

        $database = new Database();
        $result = $database->query($sql, [$id_plat]);
 
        return $result;

    }

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
   