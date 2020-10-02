<?php
require_once 'elettronico.php';

class Elettrodomestico extends Elettronico {
  public $genere;
  public $potenza;
  public $dimensioni;
  public $specifiche;

  public function __construct($_codiceArticolo, $_marca,$_modello,$_genere = 'grandi elettrodomestici') {
    parent::__construct($_codiceArticolo, $_marca,$_modello);
    $this->genere = $_genere;
  }
}
