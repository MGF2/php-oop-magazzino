<?php
require_once 'elettronico.php';

class Informatica extends Elettronico {
  public $genere;
  public $RAM;
  public $SO;
  public $ROM;
  public $specifiche;

  public function __construct($_codiceArticolo, $_marca,$_modello,$_genere = 'Informatica') {
    parent::__construct($_codiceArticolo, $_marca,$_modello);
    $this->genere = $_genere;
  }
}
