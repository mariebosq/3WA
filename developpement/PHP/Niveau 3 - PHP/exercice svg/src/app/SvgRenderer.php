<?php

class SvgRenderer {

    private $_shapes = array();
    private $_results = array();


    public function addShape(Shape $shape) {
        $this->_shapes[] = $shape;
    }

    public function run() {

        foreach($this->_shapes as $s) {
            $s->draw($this);
        }
    }

    function getResult () {

        $svgString = "<svg height='600px' width='800px'>";
        $svgString .= implode('', $this->_results);
        $svgString .= "</svg>";
        return $svgString;
    }

    public function drawCircle($circle)
    {
        // Ajout d'une balise SVG <circle>
        array_push(
            $this->_results,
            "<circle cx='".$circle->getLocation()->getX()."' cy='".$circle->getLocation()->getY()."' r='".$circle->getRadiusX()."' fill=".$circle->getcolor()."' opacity='".$circle->getOpacity()."' />"
        );
    }


}
