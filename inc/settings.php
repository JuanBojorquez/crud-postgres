<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

function validar(){
    session_start();
if (empty($_SESSION["nombre"]))
{
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="https://el-crud.herokuapp.com/index.php">Sitio de login</a>
  <?php
  exit();
}
}

?>
