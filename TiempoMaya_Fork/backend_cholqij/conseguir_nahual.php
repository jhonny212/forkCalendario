<?php
	$formato = mktime(0, 0, 0, 1, 1, 1720)/(24*60*60);
	$fecha = date("U", strtotime($_POST['date']))/(24*60*60);
	$id = $fecha-$formato;
	$nahual = $id % 20;

	$conexion = new mysqli("localhost", "root", "Jhon$19PVT", "DateTime");
	$sql="SELECT getNahual(".$nahual.") as nahual";
	$result=$conexion->query($sql);
	if ($result->num_rows > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$query=$row['nahual'];
		 }
	}
	$conexion->close();

	
?>
