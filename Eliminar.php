<?php
include 'Conexion.php';
$id=$_GET['id'];
$sql = "delete from departamentos where id='".$id."'";
mysql_query($sql);
header("location:Trabajadores.php");
	
?>