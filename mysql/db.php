
<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if(!$connection)
    {
     die("Konekcija na bazu neuspješna");
    }