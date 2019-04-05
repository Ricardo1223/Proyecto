<?php
include 'Conexion.php';
$id=$_GET['id'];
$sql = "select * from departamentos where id='".$id."'";
$sql2 = mysql_query("select Departamento from departamentoss");
$reltado = mysql_query($sql);


	while ($filas = mysql_fetch_assoc($reltado)) {
		# code...
?>
<head>
	<!-- link calendar resources -->
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
	<style>

a:link, a:visited {
  background-color: DodgerBlue;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
</head>
<div>
	<form action="">
			<input type="hidden" name="id" value="<?php echo $filas['id'] ?>">
			<label>Nombre:</label><br>
			<input type="text" name="Nombre" value="<?php echo $filas['Nombre'] ?>"><br>
			<label>Apellido Parterno:</label><br>
			<input type="text" name="ApPaterno" value="<?php echo $filas['ApPaterno'] ?>"><br>
			<label>Apellido Materno:</label><br>
			<input type="text" name="ApMaterno" value="<?php echo $filas['ApMaterno'] ?>"><br>
			<label>Departamento:</label><br>
			<select name="Puesto"> 
			<?php
				while ($datos = mysql_fetch_array($sql2)) {
					# code...
				
			?>
				<option value="<?php echo $datos['Departamento'] ?>"><?php echo $datos['Departamento'] ?></option>
			<?php
				}
			?>
			</select><br>
			<label>Sueldo:</label><br>
			<input type="text" name="Sueldo" value="<?php echo $filas['Sueldo'] ?>"><br>
			<label>Fecha:</label><br>
			<input type="text" name="date" class="tcal" value="" /><br>
			<input type="submit" name="" value="subirdatos" value="<?php echo $filas['FecNac'] ?>">
			<a href="Trabajadores.php">Regresar</a>
	</form>
	<?php } ?>
</div>
	<?php
		$Nombre = $_GET['Nombre'];
		$ApPaterno = $_GET['ApPaterno'];
		$ApMaterno = $_GET['ApMaterno'];
		$Sueldo = $_GET['Sueldo'];
		$date = $_GET['date'];
		$Puesto = $_GET['Puesto'];
		if ($Nombre!=null&&$ApPaterno!=null&&$ApMaterno!=null&&$Sueldo!=null&&$date!=null&&$Puesto!=null) {
			# code...
			$subirdat = "UPDATE Departamentos SET Nombre = '".$Nombre."', ApPaterno = '".$ApPaterno."', ApMaterno = '".$ApMaterno."', Sueldo = '".$Sueldo."', Puesto = '".$Puesto."', FecNac = '".$date."' WHERE  id = '".$id."'";
			mysql_query($subirdat);	
			if($Nombre = 1){
					header("location:Trabajadores.php");
			}
		}
	?>
