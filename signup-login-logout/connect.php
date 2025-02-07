<?php 
  $HOSTNAME= 'localhost';
  $USERNAME='root';
  $PASSWORD='root';
  $DATABASE='signupform';

  $mysqli = @new mysqli($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

// Check connection
if (!$mysqli->connect_error) {
  echo $mysqli->connect_error; 
}


?>