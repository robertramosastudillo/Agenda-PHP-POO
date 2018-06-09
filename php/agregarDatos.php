<?php

require_once "conexion.php";
$conexion=conexion();

$i=$_POST['identificacion'];
$n=$_POST['nombres'];
$a=$_POST['apellidos'];
$e=$_POST['email'];
$c=$_POST['celular'];

$sql="INSERT INTO personas (identificacion,nombres,apellidos,email,celular) VALUES ('$i','$n','$a','$e','$c')";
echo $result=mysqli_query($conexion,$sql);


?>