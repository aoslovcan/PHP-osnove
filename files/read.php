<?php 


$file = "proba.txt";

if ($handle = fopen($file, 'r'))
{

    echo $conntent = fread($handle, filesize($file));
}




?>