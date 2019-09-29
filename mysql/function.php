<?php

function selectFromData (){

    global $connection;

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result)
    {
        die("Neuspješan unos");

    
    }

    while($row = mysqli_fetch_assoc($result))
   {
      $id = $row['id'];
        echo "<option value='$id'>$id</option>";
   }
   


}

function updateTable(){
    global $connection;
    $name = $_POST['userN'];
    $password = $_POST['pass'];
    $id = $_POST['id'];

    $query = "UPDATE users SET username = '$name', password = '$password' WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if (!$result)
    {
        die ("Neuspješno". mysqli_error($connection));
    }
}


function deleteRow(){
    global $connection;
    $name = $_POST['userN'];
    $password = $_POST['pass'];
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if (!$result)
    {
        die ("Neuspješno". mysqli_error($connection));
    }
}