<?php
include("utilidades/bd/connection.php");
$con = connection();

// Obtener los datos del formulario
$id = intval($_POST["id"]); // Convertimos a entero por seguridad
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$category = $_POST['category'];
$workArea = $_POST['workArea'];
$company =  $_POST['company'];
$level =    $_POST['level'];
$salary =   $_POST['salary'];
$responsibilities = $_POST['responsibilities'];
$supervisorPosition = $_POST['supervisorPosition'];

// Consulta UPDATE
$sql = "UPDATE jobs 
        SET name='$name', lastname='$lastname', category='$category', workArea='$workArea', company='$company', level='$level', salary='$salary', responsibilities='$responsibilities', supervisorPosition='$supervisorPosition' 
        WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: indexjobs.php");
} else {
    echo "Error al actualizar empleados: " . mysqli_error($con);
}
?>
