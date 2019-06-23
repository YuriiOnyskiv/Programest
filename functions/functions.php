<?php
require_once "connect.php";

function getArticles ($limit){
  global $mysqli;
  connectDB();
$result = $mysqli->query("SELECT * FROM 'articles' ORDER BY 'id' DESC LIMIT $limit")
  closeDB();
  return resultToArray ($result);
}
funtion resultToArray ($result){
  $array = array ();
  while (($row = $result->fetch_assoc()) != false)
  $array[] = $row;
  return $array;
}
 ?>
