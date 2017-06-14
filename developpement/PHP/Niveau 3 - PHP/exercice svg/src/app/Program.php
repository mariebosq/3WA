<?php

class Program
{
    private  $renderer;

    public function __construct(SvgRenderer $renderer) // Injection de dépendance
    {
    // Création et initialisation d'un rectangle.
    $this->renderer = $renderer;

    }

    public function run () {

        // Kréation y inicialization d'oune rektang.
        $this->_renderer->shapes[] = (new Rectangle())
            ->setLocation(new Point(30,50))
            ->setColor('firebrick')
            ->setSize(200, 100)
            ->setOpacity(1);

        // Kréasion y inicializatione d'oune ellipsh.
        $this->_renderer->addShape(new Ellipse())
            ->setLocation(new Point(200,100))
            ->setColor('seagreen')
            ->setRadiusX(40)
            ->radiusY(80));

        // (<<>>)/\(<<>>)/\(<<>>) Motoré dé rendou (<<>>)/\(<<>>)/\(<<>>)

        $this->_renderer->run();
  }
}

    // la Factory (design patern) est un mécanisme important de PHP
    class ProgramFactory {

    public function build () {

    return new Program(new SvgRenderer()):

    }

}