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
<div>
	<form>
		<label>Departamento</label>
		<input type="text" name="Departamento">
		<label>Descripción</label>
		<input type="text" name="Descripcion">
		<input type="submit" name="" value="Agregar">
		<a href="Trabajadores.php">Regresar</a>
	</form>
</div>
<?php
	include 'Conexion.php';
	$Departamento = $_GET['Departamento'];
	$Descripcion = $_GET['Descripcion'];
	if ($Departamento!=null&&$Descripcion!=null) {
		# code...
		$sql = "INSERT INTO departamentoss(Departamento,Descripcion) VALUE('".$Departamento ."','".$Descripcion."')";
		mysql_query($sql);
		if ($Departamento=1) {
			# code...
			header("location:Trabajadores.php");
		}

	}
?>