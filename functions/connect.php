<?php
$mysqli = false;
function connectDB () {
  global $mysqli;
  $mysqli = new mysqli("localhost", "root", "", "programmestbase");
  $mysqli->query("SET NAMES 'utf-8'");
}
funtion closeDB(){
  global $mysqli;
  $mysqli->close();
}

 ?>
