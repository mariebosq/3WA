<?php

class Rectangle extends Shape
{
    protected $_height;
    protected $_width;


    public function __construct($h = 0; $w = 0)
{
    // Appelle le constructeur de la classe parent, la classe Shape.
parent::__construct();
$this->setHeight($h);
$this->setWidth($w);
}

public function setWidth($width)
{
    $this->_width  = $width;
    return $this
	}


public function setHeight($height)
{
    $this->_height = $height;
    return $this;
}

public function getWidth()
{
    return $this->_width;
}

public function getHeight()
{
    return $this->_height;
}



public function draw(SvgRenderer $renderer)
{
    // Utilisation de l'objet renderer pour dessiner un rectangle avec ses propriétés.
    $renderer->drawRectangle($this);
}

}