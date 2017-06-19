    <!-- Wagner Socek: Inclusao dos dados do formulario no bando de dados -->



<?php 

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "sdoor01";
	



		//$nome = mysqli_real_escape_string($conn, $_POST['evento']);
		$usu = $_POST["codusu"];
		$dini = $_POST["dini"];
		$dfim = $_POST["dfim"];
	
	echo $usu;
	echo '<br>';
	echo $dini;
		echo '<br>';

	echo $dfim;

	

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
		


		$sql = "INSERT INTO per (usu,d_ini,d_fim)
		VALUES ($usu,$dini,$dfim)"; 

			

	
/*	*/
		if (mysqli_query($conn, $sql)) {
			echo "<br>criou<br> ";

		} else {
			echo "<br>Erro: " . mysqli_error($conn);
		}

					
	
		
		mysqli_close($conn);

		
	?>


 


