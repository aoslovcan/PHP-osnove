<?php 

if (isset($_POST['submit'])){

    $name = $_POST['userN'];
    $password = $_POST['pass'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    $name = mysqli_real_escape_string($connection, $name);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";
    $salt = "ovojestringod22znakaaa";  
    $hash_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hash_and_salt);

    if($connection)
    {
      echo "<script>alert('Uspješna prijava')</script>";
    }
    else {

        die("Konekcija na bazu neuspješna");
    }

    $query = "INSERT INTO users(username, password) VALUES('$name', '$password')";

    $result = mysqli_query($connection, $query);

    if (!$result)
    {
        die("Neuspješan unos");
    }

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">

<div class="row">

<div class="col-sm-6">


<form action="" method="post">
    <div class="form-group">
    <label for="username">Korisničko ime</label>
    <input class="form-control" type="text" name="userN">
    </div>
   
   <div class="form-group">
   <label for="password">Lozinka</label>
   <input class="form-control" type="password" name="pass" >
   </div>
 
   <div class="form-group">
   <input class="btn btn-primary" type="submit" name="submit">
   </div>
   
    
    </form>
</div>
</div>
</div>
</body>
</html>