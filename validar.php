<?php
include("./inc/settings.php");

$query="SELECT * FROM usuario WHERE employeeid = '$_POST[username]' AND employeepassword= '$_POST[pwd]'";


// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// conectarse a una base de datos llamada "mary" en "localhost" por el puerto "5432"

$conn = pg_connect("host=$servername port=$port dbname=$dbname user=$username password=$password");
// Check connection
if ($conn) {
  
}else{

  die("Connection failed: " . $conn->connect_error);
}


$result = pg_query($conn,$query) or die("Ocurrio un error".pg_last_error($conn));

echo pg_num_rows($result);
if (pg_num_rows($result) > 0) {
  
  // output data of each row
  $row = pg_fetch_assoc($result);

  session_start();
  $_SESSION["nombre"] = $row["employeefirstname"];
  $_SESSION["apellido1"] = $row["employeelastname1"];
  $_SESSION["apellido2"] = $row["employeelastname2"];

  header("location: crud.php");

} else {
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="http://localhost/crud/">Sitio de login</a>
  <?php
}
pg_close($conn);

?>
