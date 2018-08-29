<?php
 
  
  $username = htmlspecialchars($_POST['username']);
  $message  = htmlspecialchars($_POST['message']);

  echo  $username, ' ', $message;
?>
