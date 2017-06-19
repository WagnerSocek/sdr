<!DOCTYPE html>
<html>
  <head> </head>

  <body>
<?php
  //echo $_GET["id"];
 // echo " . . .";

  $rfid=(rand(1000,9000));
  echo $rfid;

  ?>

  	<form method="post" action="inserttbrfid.php?id=<?php echo $rfid ?>" >
          <fieldset id="fie">

              <label>Gerar Rfid</label>
              <br><br>
              
              <input type="submit" value="Gerar"  />
           </fieldset>
    </form>





  </body>

</html>