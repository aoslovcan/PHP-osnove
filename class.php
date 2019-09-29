<?php 


class Poruka {

}


if(class_exists("Poruka"))
{
    echo "<h2>" . "Uspješno radi!!!" . "</h2>";
}
else {

    echo "Ne valja to ništa";
}

class Porukica{

    function Ispis(){

        echo "<h2>" . "Pozdrav svima, ja sam funkcija."  . "</h2>";
    }
}

if (method_exists("Porukica", "Ispis"))
{

    echo "<h2>" . "Uspješna implementacija!" . "</h2>" ;

}
else {
    echo "Funkcija je neispravna";
}


$poruka = new Porukica();

$poruka -> Ispis();




?>