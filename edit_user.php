<?php
include("connection.php");
$con = connection();

$id = $_POST["id"];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];

$sql = "UPDATE users SET name='$name', lastname='$lastname', username='$username', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
} else {

}

?>
