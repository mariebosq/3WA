<?php


class PlatModel

{
    public function getPlatByID($id_plat) {
        $sql = '
        SELECT * FROM plat
        WHERE plat.id_plat = ?
        ';

        $database = new Database();

        $result = $database->queryOne($sql, [$id_plat]);

        return $result;
    }

    public function getEntree() {
        $sql = '
        SELECT nom, id_plat
        FROM plat
        WHERE categorie = 1';

        $database = new Database();

        $result = $database->query($sql);

        return $result;
    }


    public function getPlat() {
        $sql = '
        SELECT nom, id_plat
        FROM plat
        WHERE categorie = 2';

        $database = new Database();

        $result = $database->query($sql);

        return $result;
    }

    public function getDessert() {
        $sql = '
        SELECT nom, id_plat
        FROM plat
        WHERE categorie = 3';

        $database = new Database();

        $result = $database->query($sql);

        return $result;
    }

   

    public function get($idPlat) {
        $sql = '
            SELECT plat.nom AS nom_plat, plat.prix, categorie.nom AS nom_categorie
            FROM plat
            INNER JOIN categorie
            WHERE categorie.id_categorie = plat.categorie
            AND plat.id_plat = ?
        ';

        $database = new Database();
        $result = $database->queryOne($sql, [$idPlat]);
 
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
   