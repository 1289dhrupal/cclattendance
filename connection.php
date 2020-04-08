<?php
  $mysqli = new mysqli("localhost", "root", "", "abcd");

  if(! $mysqli ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
