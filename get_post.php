
<?php 

print_r($_GET);
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

$id = 10;
$poruka = "uspjesno";
$button = "Unesi";

?>

<a href="get_post.php?id=<?php echo $id ?>&poruka=<?php echo $poruka ?>"><?php echo $button?></a>


<?php echo "<br><br>"?>


<form action="get_post.php" method="POST">
   Ime <input type="text" name="ime">
    <input type="submit" value="UNESI">


</form>
    
</body>
</html>

<?php 

echo $_POST['ime'];

?>