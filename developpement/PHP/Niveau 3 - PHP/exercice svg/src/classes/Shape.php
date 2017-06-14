<?php

abstract class Shape
{
    protected $_color;
    protected $_location;
    protected $_opacity;


    abstract public function draw(SvgRenderer $renderer);

    public function __construct()
    {
        $this->_color    = 'black';
        $this->_location = new Point();
        $this->_opacity  = 1;
    }

    public function getColor() {
        return $this->_color;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->_location;
    }

    /**
     * @return mixed
     */
    public function getOpacity()
    {
        return $this->_opacity;
    }


    public function setColor($_color)
    {
        $this->_color = $_color;
        return $this;
    }

    public function setLocation(Point $p0)
    {
        $this->_location = $p0;
        return $this;
    }

    public function setOpacity($_opacity)
    {
        $this->_opacity = $_opacity;
        return $this;
    }
}