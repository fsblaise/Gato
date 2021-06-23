<?php

  function loadUsers($path) {
    $users = [];                  
    $file = "";
    //$file = fopen($path, "r"); 
    try{
      $file = fopen($path, "r");
    } 
    catch(Exception $exc){
      echo "nem található a file!";
      $file = fopen($path, "w");
      fclose($file);
      $file = fopen($path, "r");

    }

    /*if ($file === FALSE){          
      die("HIBA: A fájl megnyitása nem sikerült!"); //tbh a  shutdown helye, azonban a try-catch hasznosabbnak tűnt
    }*/

    while (($line = fgets($file)) !== FALSE) { 
      $user = unserialize($line);  
      $users[] = $user;            
    }

    fclose($file);
    return $users;       

  }
  

  
  

  function saveUsers($path, $users) {
    $file = fopen($path, "w");    
    if ($file === FALSE)          
      die("HIBA: A fájl megnyitása nem sikerült!");

    foreach($users as $user) {    
      $serialized_user = serialize($user);      
      fwrite($file, $serialized_user . "\n");   
    }
}




function uploadProfilePicture($username) {
  global $fajlfeltoltes_hiba;
  
  if (isset($_FILES["profile-pic"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {  
    $kiterj = ["png", "jpg", "jpeg"];                                           
    $kit = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));

    if (in_array($kit, $kiterj)) {      
      if ($_FILES["profile-pic"]["error"] === 0) {       
        if ($_FILES["profile-pic"]["size"] <= 31457280) { 
          $path = "php_images/" . $username . "." . $kit;   

          if (!move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $path)) { 
            $fajlfeltoltes_hiba = "A fájl átmozgatása nem sikerült!";
          }
        } else {
          $fajlfeltoltes_hiba = "A fájl mérete túl nagy!";
        }
      } else {
        $fajlfeltoltes_hiba = "A fájlfeltöltés nem sikerült!";
      }
    } else {
      $fajlfeltoltes_hiba = "A fájl kiterjesztése nem megfelelő!";
    }
  }
}


function setLastLog(){
  $lastlog = time();
  $_SESSION['lastlog'] = $lastlog;
}

function lastLoginTime(){
  $lastlog = $_SESSION['lastlog'];
  $ret = time() - $lastlog;
  return $ret;
}




?>