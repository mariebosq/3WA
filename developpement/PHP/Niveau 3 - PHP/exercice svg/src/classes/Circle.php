<?php

//contrainte pour les ellipses et les cercles
//rayon
class Circle extends Ellipse {
    protected $_rayon;
    protected $_perimetre;

    public function __construct() {
        parent::__construct();
        return $this;
}

}