    <!-- Wagner Socek: Inclusao dos dados do formulario no bando de dados -->



<?php 

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "sdoor01";
		$table = "cus";

$inf = $_POST['info'];

		//$nome = mysqli_real_escape_string($conn, $_POST['evento']);
		$id = $_GET["id"];
	

	

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	// Check connection
	if (!$conn) {
		die("Connection fail in te hole: " . mysqli_connect_error());
	}

	$sql = "USE $dbname";
	if (mysqli_query($conn, $sql)) {
		echo "<br>Database changed";
	} else {
		echo "<br>Error creating database: " . mysqli_error($conn);
	}
		


		$sql = "INSERT INTO $table (rfid_id,info)
		VALUES ($id,'$inf')"; 

			

	
/*	*/
		if (mysqli_query($conn, $sql)) {
			echo "<br>criou<br> ";

		} else {
			echo "<br>Erro: " . mysqli_error($conn);
		}

					
	
		
		mysqli_close($conn);

		
	?>


 


