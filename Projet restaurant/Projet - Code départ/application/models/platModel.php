<?php



class Meal

{

    public function create($nom, $prix, $categorie)

    {

        $sql = 'INSERT INTO Meal

        (

            nom,

            prix,

            categorie,

            ) VALUES (?, ?, ?)';



        // Insertion du produit alimentaire dans la base de données.

        $database = new Database();

        $database->executeSql($sql,

        [
            $nom,

            $prix,

            $categorie,

        ]);

    }



    public function find($mealId)

    {

        $database = new Database();



        $sql = 'SELECT

                    Name,

                    Description,

                    Photo,

                    BuyPrice,

                    SalePrice

                FROM Meal

                WHERE Id = ?';



        // Récupération du produit alimentaire spécifié.

        return $database->queryOne($sql, [ $mealId ]);

    }



    public function listAll()

    {

        $database = new Database();



        $sql = 'SELECT * FROM Meal';



        // Récupération de tous les produits alimentaires.

        return $database->query($sql);

    }

}
