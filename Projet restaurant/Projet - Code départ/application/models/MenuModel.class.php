<?php



class MenuModel

{

    public function create($entree, $plat, $dessert, $nom_menu, $prix_menu)

    {

        $sql = 'INSERT INTO menu

        (

            entree,

            plat,

            dessert,

            nom_menu,

            prix_menu

        ) VALUES (?, ?, ?, ?, ?)';



        // Insertion du produit alimentaire dans la base de données.

        $database = new Database();

        $database->executeSql($sql,

        [


            $entree,

            $plat,

            $dessert,

            $nom_menu,

            $prix_menu

        ]);

    }



    public function find($mealId)

    {

        $database = new Database();



        $sql = 'SELECT

                    *

                FROM menu

                WHERE id_menu = ?';



        // Récupération du produit alimentaire spécifié.

        return $database->queryOne($sql, [ $mealId ]);

    }



    public function listAll()

    {

        $database = new Database();



        $sql = 'SELECT * FROM menu';



        // Récupération de tous les produits alimentaires.

        return $database->query($sql);

    }

}
