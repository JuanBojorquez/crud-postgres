<?php 
$servername = "ec2-54-210-226-209.compute-1.amazonaws.com";
$username = "msxdmzqpabnbos";
$password = "6aae8d639554200dd4e9ae9bef836c42d3991f22932a19e13fc5c9ad7fa0839f";
$dbname = "dfsejugddsr45";
$port=5432;

function validar(){
    session_start();
if (empty($_SESSION["nombre"]))
{
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="http://localhost/crud/">Sitio de login</a>
  <?php
  exit();
}
}

?>