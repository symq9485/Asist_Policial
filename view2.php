<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	require_once('conexionBD.php');
		$sql = "SELECT * FROM Info_Cri";
		$result = mysqli_query($conexion, $sql); ?>
		<table>
			<thead>
				<th>Expediente</th>
				<th>Delito</th>
				<th>Solicitado</th>
				<th>Estado</th>
				<th>Municipio</th>
				<th>Calle</th>
				<th>Lugar</th>
			</thead>
			<?php 
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
     				<tr>
     					<td><?php echo $row["expediente"]; ?></td>
     					<td><?php echo $row["delito"]; ?></td>
     					<td><?php echo $row["solicitado"]; ?></td>
     					<td><?php echo $row["estado_lc"]; ?></td>
     					<td><?php echo $row["municipio_lc"]; ?></td>
     					<td><?php echo $row["calle_lc"]; ?></td>
     					<td><?php echo $row["lugar_lc"]; ?></td>     					
     				</tr>					
			<?php	
				}
			 ?>
		</table>

	<?php require_once('cerrar.php'); ?>
</body>
</html>
