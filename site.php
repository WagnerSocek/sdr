<!DOCTYPE html>
<html>
  <head> </head>

  <body>


  <?php

   $table = "rfid";

/*
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
    echo "<br>Database changed";
  } else {
    echo "<br>Error creating database: " . mysqli_error($conn);
  }
*/

    include 'conbd.php'


  ?>




  <?php

        $sql = "SELECT * FROM $table";

        $result = mysqli_query($conn, $sql);
   
        if (mysqli_num_rows($result) > 0) {

          while($row = mysqli_fetch_assoc($result)) {

            echo "<br>";
            echo $row["cod"];

          }


        }


  ?>



  <?php //missao: listar todos os rfids no combobox, ao clicar redireciona para pag de formulario com a id do rfid//

        $sql = "SELECT * FROM $table";

        $result = mysqli_query($conn, $sql);
   
          if (mysqli_num_rows($result) > 0) {

            ?> <select id="ano" name="ano" onchange="javascript:location.href=this.value";> <?php

              while($row = mysqli_fetch_assoc($result)) { ?>

                  <option value="form.php?idrf=<?php echo $row["cod"] ?>"><?php  echo $row["cod"]; ?>   

                  </a></option>  <?php 

              }
            ?> </select> <?php
          }


  ?>






        <select id="ano" name="ano" onchange="javascript:location.href=this.value";>



                <option value="oi.com"> Oi  </a></option> 
                <option value="oi.com"> Oi  </a></option> 

                
      </select>







  </body>

</html>