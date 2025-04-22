<?php

include("utilidades/bd/connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM jobs WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: indexjobs.php");
}else{

}

?>