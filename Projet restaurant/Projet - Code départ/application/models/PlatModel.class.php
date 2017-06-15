<?php


class PlatModel
{
    public function getAll() {

        $sql = 'SELECT * FROM plat';
        $database = new Database();

        $result = $database->query($sql);

        return $result;
    }

	public function create($nom, $prix, $categorie)

    {

        $sql = 'INSERT INTO plat

        (

            nom,

            prix,

            categorie

        ) VALUES (?, ?, ?)';


// Insertion du produit alimentaire dans la base de données.

        $database = new Database();

        $database->executeSql($sql,

        [

            $nom,

            $prix,

            $categorie

        ]);

    }
}
   