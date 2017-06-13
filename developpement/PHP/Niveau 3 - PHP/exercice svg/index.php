<?php 

include_once 'Program.php';
include_once 'SvgRenderer.php';
include_once 'index.html.php';

$renderer = new SvgRenderer();
$program  = new Program($renderer); // Injection du moteur de rendu dans le programme
$program->run();