<?php
  class Elettronico {
    public $codiceArticolo;
    public $marca;
    public $modello;
    public $prezzo;

    public function __construct($_codiceArticolo, $_marca,$_modello) {
      $this->codiceArticolo = $_codiceArticolo;
      $this->marca = $_marca;
      $this->modello = $_modello;
    }

    public function calcolaPrezzoIva() {
      if (empty($this->prezzo)) {
        die('non hai inserto il prezzo');
      }
      return ($this->prezzo * 0.22) + $this->prezzo . ' euro (Iva Inc.)';
    }
  }
 ?>
