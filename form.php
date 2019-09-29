<?php 

if(isset($_POST['submit'])){

    $username = $_POST['userN'];
    $password = $_POST['pass'];



    if (strlen($username) < 5)
    {

        echo "Korisničko ime prekratko.";

    }
    else 
    {
        echo "Vaše ime je: " . $username;
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
</head>
<body>
    <form action="form.php" method="post">
    
    <input type="text" placeholder="Enter Username" name="userN"> <br>
    <input type="password" placeholder="Enter Password" name="pass"><br>
    <input type="submit" name="submit">
    
    
    </form>
</body>
</html>