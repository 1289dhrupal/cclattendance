<?php
  $mysqli = new mysqli("us-cdbr-iron-east-01.cleardb.net", "bc030cbda9a312", "898f0c83", "heroku_9cbad83aa642126");

  if(! $mysqli ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
