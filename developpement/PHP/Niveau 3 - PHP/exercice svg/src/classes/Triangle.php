<?php

class Triangle extends Shape {

    /**
    *
    /|_|\-=-/|_|\-=-/|_|\-=-/|_|\ Propriétés /|_|\-=-/|_|\-=-/|_|\-=-/|_|\
    */
    protected $_points;

    /**
    *
    /|_|\-=-/|_|\-=-/|_|\-=-/|_|\ Méthodes /|_|\-=-/|_|\-=-/|_|\-=-/|_|\
    */

    public function __construct () {

    parent::__construct();
    return $this;
    }

    /**
    *
    /|_|\-=-/|_|\-=-/|_|\-=-/|_|\ Accesseurs /|_|\-=-/|_|\-=-/|_|\-=-/|_|\
    */

    public function getPoints () {
    return $this->_points;
    }

    public function addPoint (Point $p) {
    if (count($this->_points) < 3) {
    $this->_points[] = $p;
    }
    return $this;
}

    abstract public function draw (SvgRenderer $renderer);

}