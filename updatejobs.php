<?php 
    include("utilidades/bd/connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM jobs WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar Empleados</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_jobs.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input type="text" name="lastname" placeholder="Apellidos" value="<?= $row['lastname']?>">
                <input type="text" name="category" placeholder="Categoria" value="<?= $row['category']?>">
                <input type="text" name="workArea" placeholder="Area de trabajo" value="<?= $row['workArea']?>">
                <input type="text" name="company" placeholder="Compañia" value="<?= $row['company']?>">
                <input type="text" name="level" placeholder="Nivel" value="<?= $row['level']?>">
                <input type="text" name="salary" placeholder="Salario" value="<?= $row['salary']?>">
                <input type="text" name="responsibilities" placeholder="Responsabilidad" value="<?= $row['responsibilities']?>">
                <input type="text" name="supervisorPosition" placeholder="Posicion del supervisor" value="<?= $row['supervisorPosition']?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>