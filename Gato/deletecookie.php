<?php
  setcookie("bejelentkezesek", "", time() - 3600);         
  header("Location: index.php");                 
?>