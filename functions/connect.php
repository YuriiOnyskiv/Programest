<?php
$mysqli = false;
/**
* Funkcja podlaczenia do bazy danych
*/
function connectDB () {
  global $mysqli;
  /**
  *Sa to dane dla wejscia do bazy oraz kodowanie utf-8
  */
  $mysqli = new mysqli("localhost", "root", "", "programmestbase");
  $mysqli->query("SET NAMES 'utf-8'");
}
/**
* Funkcja odlaczenia od bazy danych
*/
funtion closeDB(){
  global $mysqli;
  $mysqli->close();
}

 ?>
