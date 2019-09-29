
<?php

$name = "PrviKolacic";
$value = 300;
$expiration = time () + (60 * 60 * 24 * 7);

setcookie($name, $value, $expiration);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    
    
    if (isset($_COOKIE['PrviKolacic']))
    {
        $name = $_COOKIE['PrviKolacic'];
        echo "Vrijednost unutar cookie-a: " . "<h3>" . $name . "</h3>";
    }
    else {
        echo $name = "Vrijednost ne postoji";
    }
    
    
    ?>
</body>
</html>