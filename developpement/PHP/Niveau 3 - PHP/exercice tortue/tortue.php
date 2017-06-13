<?php

class Tortue {
  public $orientation = 0;
  public $x = 100;
  public $y = 100;

  public function etat() {
    var_dump($this);
  }

  public function avance() {

    switch ($this->orientation) {

      case '0';
      $this->x += 10;
      break;

      case '1';
      $this->y += 10;
      break;

      case '2';
      $this->x -= 10;
      break;

      case '3';
      $this->y -= 10;
      break;

    }
  var_dump($this);
  }


  public function recule() {

    switch ($this->orientation) {

      case '0';
      $this->x -= 10;
      break;

      case '1';
      $this->y -= 10;
      break;

      case '2';
      $this->x += 10;
      break;

      case '3';
      $this->y += 10;
      break;

    }
    var_dump($this);
  }

  public function tourneDroite() {

      if ($this->orientation < 3) {
        $this->orientation += 1;
      } else {
        $this->orientation = 0;
      }

    var_dump($this);
  }

  public function tourneGauche() {
    if ($this->orientation > 0) {
      $this->orientation -= 1;
    } else {
      $this->orientation = 3;
    }

  var_dump($this);

  }
}

class Tortue3D extends Tortue {
  public $x;
  public $z;
  public $orientation;
  
  $z __construct($x, $y, $orientation)
}

?>
