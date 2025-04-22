<?php
include("utilidades/bd/connection.php");
$con = connection();

$sql = "SELECT * FROM jobs";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="VISTAS/CSS/style.css" rel="stylesheet">
    <title>Empleos CRUD</title>
    <script src="vistas/js/bienvenida.js"></script>
</head>

<body>
    <div class="users-form">
        <h1>Crear Empleado</h1>
        <form action="insert_jobs.php" method="POST">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellidos">
            <input type="text" name="category" placeholder="Categoria">
            <input type="text" name="workArea" placeholder="Area de trabajo">
            <input type="text" name="company" placeholder="Compañia">
            <input type="text" name="level" placeholder="Nivel">
            <input type="text" name="salary" placeholder="Salario">
            <input type="text" name="responsibilities" placeholder="Responsabilidad">
            <input type="text" name="supervisorPosition" placeholder="Posición del supervisor">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Empleados registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Categoria</th>
                    <th>Area de trabajo</th>
                    <th>Compañia</th>
                    <th>Nivel</th>
                    <th>Salario</th>
                    <th>Responsabilidad</th>
                    <th>Posición del supervisor</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th> 
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['lastname'] ?></th>
                        <th><?= $row['category'] ?></th>
                        <th><?= $row['workArea'] ?></th>
                        <th><?= $row['company'] ?></th>
                        <th><?= $row['level'] ?></th>
                        <th><?= $row['salary'] ?></th>
                        <th><?= $row['responsibilities'] ?></th>
                        <th><?= $row['supervisorPosition'] ?></th>
                        <th><a href="updatejobs.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_jobs.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>