<?php

require_once "conexion.php";
$conexion=conexion();
$id=$_POST['id'];
$i=$_POST['identificacion'];
$n=$_POST['nombres'];
$a=$_POST['apellidos'];
$e=$_POST['email'];
$c=$_POST['celular'];

$sql="UPDATE personas SET identificacion='$i',
                          nombres='$n',
                          apellidos='$a',
                          email='$e',
                          celular='$c' 
                          WHERE id='$id'";

echo $result=mysqli_query($conexion,$sql);


?>