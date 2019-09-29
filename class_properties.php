<?php


class Film {

    static $polje = "Poruka";
var $ime = "Annabelle";
var $zanr = "Horor";
var $redatelj = "Neko Ime";
var $godina_izdanja = 2019;

function Ispis(){

    echo "<h1>" . $this -> ime = "Novo Ime" . "</h1>";
}
}


$film = new Film();

echo "<h1>" . $film -> ime . "</h1>";

$film -> Ispis();

echo Film::$polje;


class FilmDva extends Film {

}

$filmić = new FilmDva();

echo "<br>" . $filmić ->ime;

?>