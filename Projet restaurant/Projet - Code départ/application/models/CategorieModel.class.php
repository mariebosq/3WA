<?php


class CategorieModel
{
     public function getAll() {
        $sql = 'SELECT * FROM categorie';
        $database = new Database();

        $result = $database->query($sql);

        return $result;
    }
  }