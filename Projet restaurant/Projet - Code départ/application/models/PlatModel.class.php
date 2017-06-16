<?php


class PlatModel

{

    public function get($idPlat) {

        $sql = 'SELECT *
        FROM plat AS P
        INNER JOIN categorie AS C ON C.id_categorie = P.categorie
        WHERE P.id_plat = ?
        ';

        $database = new Database();
        $result = $database->queryOne($sql, [$idPlat]);
 
 //       var_dump($result);
 //       die;

        return $result;


    }

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
        return $database->executeSql($sql,
        [
            $nom,
            $prix,
            $categorie
        ]);

    }
}
   