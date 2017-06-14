<?php

// $p = new Point(10.20);

//$p = (new Point(5,5))->move(20,10)->setX(30)->getX();

//$p = new Point(10);

final class Point {

    /**
     * /\/\/\/\ Propriétés /\/\/\/\
     */
    private $_x;
    private $_y;

    /**
     * /\/\/\/\ Constructeur /\/\/\/\
     */

    public function __construct ($x0, $y0) {

        $this->_x = $x0;
        $this->_y = $y0;

        return $this;
    }

    /**
     * /\/\/\/\ Accesseurs /\/\/\/\
     */

    public function getX () {
        return $this->_x;
    }

    public function getY () {
        return $this->_y;
    }

    public function setX ($x0) {
        $this->_x = $x0;
        return $this;
    }

    public function setY ($y0) {
        $this->_y = $y0;
        return $this;
    }

    /**
     * /\/\/\/\ Méthodes /\/\/\/\
     */

    public function moveTo ($x0, $y0) {
        $this->setX($x0);
        $this->setY($y0);
        return $this;
    }

    public function move ($x0, $y0) {
        $this->setX($this->_x + $x0);
        $this->setY($this->_y + $y0);
        return $this;
    }







}