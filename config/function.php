<?php
session_start();
require "./db.php";

function validate($inputData) {
  global $connection; 
  return mysqli_real_escape_string($connection, $inputData);
}

?>