<?php
include("utilidades/bd/connection.php");
$con = connection();

// Obtener los datos del formulario
$id = intval($_POST["id"]); // Convertimos a entero por seguridad
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Consulta UPDATE
$sql = "UPDATE users 
        SET name='$name', lastname='$lastname', username='$username', password='$password', email='$email' 
        WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
} else {
    echo "Error al actualizar usuario: " . mysqli_error($con);
}
?>
