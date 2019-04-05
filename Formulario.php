<?php
	include 'Conexion.php';
	$sql = mysql_query("select Departamento from departamentoss");
	$Nombre = "hola";
	$ApPaterno = "hola";
	$ApMaterno = "hola";
	$Sueldo = 0;
	$date = 0;
	$Puesto = 0;
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
		<label>Nombre:</label><br>
		<input type="text" name="Nombre" ><br>
		<label>Apellido Parterno:</label><br>
		<input type="text" name="ApPaterno"><br>
		<label>Apellido Materno:</label><br>
		<input type="text" name="ApMaterno"><br>
		<label>Departamento:</label><br>
		<select name="Puesto"> <br>
		<?php
			while ($datos = mysql_fetch_array($sql)) {
				# code...
			
		?>
			<option value="<?php echo $datos['Departamento'] ?>"><?php echo $datos['Departamento'] ?></option>
		<?php
			}
		?>
		</select><br>
		<label>Sueldo:</label><br>
		<input type="text" name="Sueldo"><br>
		<label>Fecha:</label><br>
		<input type="text" name="date" class="tcal" value="" /><br>
		<input type="submit" name="" value="subirdatos">
		<a href="Trabajadores.php">Regresar</a>
	</form>
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
				$subirdat = "INSERT INTO Departamentos (Nombre,ApPaterno,ApMaterno,Sueldo,FecNac, Puesto) VALUE ('".$Nombre."','".$ApPaterno."','".$ApMaterno."','".$Sueldo."','".$date."','".$Puesto."')";	
				mysql_query($subirdat);
				if($Nombre = 1){
					header("location:Trabajadores.php");
				}
			}
	?>