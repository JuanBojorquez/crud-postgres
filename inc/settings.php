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
  <a href="https://the-crud.herokuapp.com/crud/">Sitio de login</a>
  <?php
  exit();
}
}

?>
