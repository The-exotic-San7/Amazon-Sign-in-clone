<?php
  $con = mysqli_connect('localhost','sayantan','yes123','game_library');

  if(!$con)
  {
  	echo 'Connection error'. mysqli_connect_error();
  }
?>