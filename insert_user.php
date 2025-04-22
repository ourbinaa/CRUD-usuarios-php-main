

<?php
include("utilidades/bd/connection.php");
$con = connection();

// Capturamos los datos del formulario
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Insertamos los datos (omitimos 'id' porque se autoincrementa solo)
$sql = "INSERT INTO users (name, lastname, username, password, email) 
        VALUES ('$name', '$lastname', '$username', '$password', '$email')";

$query = mysqli_query($con, $sql);

// Verificamos si la inserción fue exitosa
if($query){
    Header("Location: index.php");
} else {
    echo "Error al insertar el usuario: " . mysqli_error($con);
}
?>
