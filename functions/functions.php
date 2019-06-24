<?php
require_once "connect.php";
/**
*Funkcja dodawania artykulow
*/
function getArticles ($limit){
  global $mysqli;
  connectDB();
$result = $mysqli->query("SELECT * FROM 'articles' ORDER BY 'id' DESC LIMIT $limit")
  closeDB();
  return resultToArray ($result);
}
function resultToArray ($result){
  $array = array ();
  while (($row = $result->fetch_assoc()) != false)
  $array[] = $row;
  return $array;
}
 ?>
