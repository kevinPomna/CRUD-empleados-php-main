<?php 
include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Editar usuarios</title>
</head>
<body>
    <div class="users-form">
        <form action="edit_user.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['name']?>">
            <!-- Eliminé el campo "apellido" del formulario -->
            <input type="text" name="username" placeholder="Username" value="<?= $row['username']?>">
            <input type="email" name="email" placeholder="Email" value="<?= $row['email']?>">

            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
