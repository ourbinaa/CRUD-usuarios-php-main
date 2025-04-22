

<?php
include("utilidades/bd/connection.php");
$con = connection();

// Capturamos los datos del formulario
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$category = $_POST['category'];
$workArea = $_POST['workArea'];
$company =  $_POST['company'];
$level =    $_POST['level'];
$salary =   $_POST['salary'];
$responsibilities = $_POST['responsibilities'];
$supervisorPosition = $_POST['supervisorPosition'];

// Insertamos los datos (omitimos 'id' porque se autoincrementa solo)
$sql = "INSERT INTO jobs (name, lastname, category, workArea, company, level, salary, responsibilities, supervisorPosition) 
        VALUES ('$name', '$lastname', '$category', '$workArea', '$company', '$level', '$salary', '$responsibilities', '$supervisorPosition')";

$query = mysqli_query($con, $sql);

// Verificamos si la inserción fue exitosa
if($query){
    Header("Location: indexjobs.php");
} else {
    echo "Error al insertar el usuario: " . mysqli_error($con);
}
?>
