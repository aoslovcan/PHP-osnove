<?php 


$file = "proba.txt";

if ($handle = fopen($file, 'w')){

    fwrite($handle, 'Prvi zapis s PHP-om.');
    echo "<br>";
    fwrite($handle, 'Drugi zapis s PHP-om.');


    fclose($handle);
}
else{

    echo 'Ne možete pisati u ovaj dokument!!';
}




?>