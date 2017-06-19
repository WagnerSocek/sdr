    <!-- Wagner Socek: Inclusao dos dados do formulario no bando de dados -->



<?php 

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "sdoor01";
		$table = "rfid";



		//$nome = mysqli_real_escape_string($conn, $_POST['evento']);
		$dado = $_GET["id"];
	

	

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
		


		$sql = "INSERT INTO $table (cod)
		VALUES ($dado)"; 

			

	
/*	*/
		if (mysqli_query($conn, $sql)) {
			echo "<br>criou<br>cod: ";
			echo $dado;
		} else {
			echo "<br>Erro: " . mysqli_error($conn);
		}

					
	
		
		mysqli_close($conn);

		
	?>


 


