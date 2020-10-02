<?php
require_once 'classes/elettronico.php';
require_once 'classes/elettrodomestico.php';
require_once 'classes/informatica.php';

$pc = new Informatica ('EA2546','Acer','Aspire');
$pc->prezzo ='10';
echo $pc->calcolaPrezzoIva();
var_dump($pc);

$lavatrice = new Elettrodomestico ('EY1484','Whirpool','SF SHHCURD');
$lavatrice->prezzo ='299';
echo $lavatrice->calcolaPrezzoIva();
var_dump($lavatrice);
