<!DOCTYPE html>
<html>
  <head> </head>

  <body>


  <?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "sdoor01";
    $table = "rfid";



    //$nome = mysqli_real_escape_string($conn, $_POST['evento']);
    //$dado = $_GET["id"];
  

  

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);
  // Check connection
  if (!$conn) {
    die("Connection fail in te hole: " . mysqli_connect_error());
  }

  $sql = "USE $dbname";
  if (mysqli_query($conn, $sql)) {
    echo "<br>";
  } else {
    echo "<br>Error creating database: " . mysqli_error($conn);
  }


  ?>


  <?php 
    $idrf = $_GET["idrf"];

    echo $idrf;
  ?>


  <form method="post" action="insertcus.php?id=<?php echo $idrf ?>" id="formlogin" name="formlogin" >
        <fieldset id="fie">
            <br /><br />

            <label>info : </label>
            <input type="text" name="info" id="info"  /><br />

            <input type="submit" value="Cadastrar "  />
        </fieldset>
  </form>






  </body>

</html>