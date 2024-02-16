<?php
include("connection.php");
$con = connection();

if(isset($_POST['nombre'], $_POST['apellido'], $_POST['username'], $_POST['email'])) {
    $id = null;
    $name = $_POST['nombre']; 
    $lastname = $_POST['apellido']; 
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (id, name, lastname, username, email) VALUES ('$id', '$name', '$lastname', '$username', '$email')";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: index.php");
    } else {
    
    }
} else {
   
}
?>
