<!DOCTYPE html>
<html>
  <head> </head>

  <body>

  <?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "sdoor01";
    $table = "cus";



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


  ?>



<?php
  //echo $_GET["id"];
 // echo " . . .";

  $rfid=(rand(1000,9000));
  echo $rfid;

  ?>
<!--
  	<form method="post" action="inserttbrfid.php?id=<?php echo $rfid ?>" >
          <fieldset id="fie">

              <label>Gerar Rfid</label>
              <br><br>
              
              <input type="submit" value="Gerar"  />
           </fieldset>
    </form>

-->

    




    <?php //missao: listar todos os rfids no combobox, ao clicar redireciona para pag de formulario com a id do rfid//

        $sql = "SELECT * FROM $table";

        $result = mysqli_query($conn, $sql);
   
          if (mysqli_num_rows($result) > 0) {

            ?> 
              <select id="cus" name="cus" onchange="javascript:location.href=this.value";> <option value="oi"> Selecione o Usuario </option>  <?php

              while($row = mysqli_fetch_assoc($result)) { ?>

                  <option value="incluitbrfid.php?idcus=<?php echo $row["cod"] ?>&rf=<?php echo $rfid ?>"><?php  echo $row["info"]; ?>   

                  </a></option>  <?php 

              }
            ?> </select> <?php
          }


  ?>





  </body>

</html>