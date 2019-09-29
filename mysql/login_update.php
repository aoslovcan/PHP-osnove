<?php 
include "db.php";
include "function.php";


if (isset($_POST['submit'])){
    
    updateTable();



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
   <select name="id" id="">

   <?php
    selectFromData ();
   
   ?>
   
   
   
   </select>
   </div>


   <div class="form-group">
   <input class="btn btn-primary" type="submit" value ="UPDATE" name="submit">
   </div>
   
    
    </form>
</div>
</div>
</div>
</body>
</html>