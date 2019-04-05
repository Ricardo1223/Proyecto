<!DOCTYPE html>
<html>
<head>
	<title>Proyecto Empleados</title>
	
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
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
<script type="text/javascript">
	function Confimar()
	{
		var repuesta = confirm("¿Esta seguro que dea eliminar?")
		if(repuesta == true)
		{
			return true;
		}
		else
		{
			return false;
		}

	}
</script>
<body>
	<?php 
		include 'Conexion.php';
		$sql = "select * from departamentos";
		$resultado = mysql_query($sql);
	?>
	<div>
		<a href="Formulario.php">Nuevo Empleado</a>
		<a href="Departamento.php">Nuevo Departamente</a>
		<table >
			<thead>
				<tr>
					<th>Nombre Completo</th>
					<th>Fecha de nacimiento</th>
					<th>Departamento</th>
					<th>Suerdo</th>
					<th>Accion</th>
				</tr>
			</thead>
			<thead>
				<?php while ($filas= mysql_fetch_assoc($resultado)) {
					# code...
				
				?>
				<tr>
					<td><?php echo $filas['Nombre'], " ", $filas['ApPaterno'], " " ,$filas['ApMaterno'] ?></td>
					<td><?php echo $filas['FecNac'] ?></td>
					<td><?php echo $filas['Puesto'] ?></td>
					<td><?php echo $filas['Sueldo'] ?></td>
					<td>
						<a href="Editar.php?id=<?php echo $filas['id'] ?>">Modificar</a>
						<a href="Eliminar.php?id=<?php echo $filas['id'] ?>" onclick="return Confimar()">Eliminar</a>
					</td>
				</tr>
				<?php
					} 
				?>
			</thead>
		</table>
	</div>
</body>
</html>