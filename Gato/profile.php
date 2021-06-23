<?php


    if(!session_id()) session_start();
    include "fuggvenyek.php";

    if(!isset($_SESSION["user"])){
        header("Location: user.php");
    }

    $attnum = 0;
    if (!isset($_POST['clickbait'])) {
      $_SESSION['attnum'] = 1; 
  }
    
  class Clickbait{
    public $nev;

    public function __construct($nev)
    {
      $this->nev = $nev; 
    }
    public function kiderulKiAKolto(){
      echo "Üdvözlünk téged itt újra <strong>Lord " . $this->nev . "!</strong> Kattintson a gombra, és kapja a több szuper macskát! <br/>";
    }
      }
      
?>

<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
    <title>Gato</title>
    <meta name="author" content="Faragó Ákos, Oláh Balázs"/>
    <meta name="description" content="Macska webshop, ahol mindenféle macska kapható"/>
    <meta name="keywords" content="macska, eladó, webshop, gato, cat, macskafogó"/>
    <link rel="icon" href="img/titleimg/giovanni.png" />
    <link rel="stylesheet" href="css/nav.css" />
    <title>Profil</title>
    
</head>
<body>
<main>
        <nav id="navbar">
            <ul>
                <li id="menu">
                    <button class="legordulogomb">
                        Menü
                        <i class="lemegy"></i>
                    </button>
                    <ul class="menugombok">
                        <li id='GATOmenu'><a href="index.php" ">Gato</a></li>
                        <li><a href="tortenet.php" >Történet</a></li>
                        <li><a href="kinalat.php">Kínálat</a></li>
                        <li><a href="specs.php">Specifikációk</a></li>
                        <li><a href="logout.php">Kijelentkezés</a></li>
                        <li><a href="profile.php">Profil</a></li>
                    </ul>
                </li>
                <li class='gombok' id='GATO'><a href="index.php" ">Gato</a></li>
                <li class='gombok'><a href="tortenet.php" >Történet</a></li>
                <li class='gombok'><a href="kinalat.php">Kínálat</a></li>
                <li class='gombok'><a href="specs.php">Specifikációk</a></li>
                <li class='gombok'><a href="logout.php">Kijelentkezés</a></li>
                
                <li class='gombok'><a href="profile.php" style="color: #CCCCCC">Profil</a></li>
            </ul>
        </nav>
        <?php
        $profil = "php_images/default.jpg";
        $path = "php_images/" . $_SESSION["user"]["felhasznalonev"];

        $kiterj = ["jpg", "jpeg", "png"];

        foreach($kiterj as $kit){
            if(file_exists($path . "." . $kit)) {
                $profil = $path . "." . $kit;
                
            }
        }   
?>


    <section>

        <table class="prof-class">
          <tr>
            <th colspan="2">
              <img src="<?php echo $profil; ?>" alt="Profilkép" height="200"/>
              <?php if ($_SESSION["user"]["felhasznalonev"] !== "default") { ?>
                <form action="profile.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="profile-pic" accept="image/*"/>
                  <input type="submit" name="feltoltes" value="Profilkép módosítása"/>
                </form>
              <?php } ?>
            </th>
          </tr>
          <tr>
            <th>Felhasználónév:</th>
            <td><?php echo $_SESSION["user"]["felhasznalonev"]; ?></td>
          </tr>
          <tr>
            <th>Születési idő:</th>
            <td><?php echo $_SESSION["user"]["szuletesiido"]; ?></td>
          </tr>
          <tr>
            <th>Név:</th>
            <td><?php echo $_SESSION["user"]["nev"]; ?></td>
          </tr>
          <tr>
            <th>Telefonszám:</th>
            <td><?php echo $_SESSION["user"]["telefonszam"]; ?></td>
          </tr>
          <tr>
            <th>E-mail cím:</th>
            <td><?php echo $_SESSION["user"]["email"]; ?></td>
          </tr>
          <tr>
            <th>Legutóbbi bejelentkezés óta eltelt idő:</th>
            <td><?php
            $time = lastLoginTime();
            $min = (int)($time/60);
            $sec = $time%60;
            if($time < 60)
                echo "{$sec} másodperc";
            else
                echo "{$min} perc és {$sec} másodperc";
            ?></td>
          </tr>
        </table>
        <?php
          if (isset($_POST["feltoltes"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {  
            $fajlfeltoltes_hiba = "";                                       
            uploadProfilePicture($_SESSION["user"]["felhasznalonev"]);      

            $kit = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));   
            $path = "php_images/" . $_SESSION["user"]["felhasznalonev"] . "." . $kit;            
            
            if ($fajlfeltoltes_hiba === "") {
              if ($path !== $profil && $profil !== "php_images/default.jpg") {  
                    unlink($profil); 
              }
              header("Location: profile.php");              
            } else {
              echo "<p>" . $fajlfeltoltes_hiba . "</p>";
            }
          }
        ?>
    </section>

    <?php 
$f = $_SESSION["user"]["felhasznalonev"];
$petofisandor = new Clickbait($f, 0);
echo $petofisandor->kiderulKiAKolto() . "<br/>";
?>

      <form action="profile.php" method="POST">
        <input type="submit" name="clickbait" value=<?php echo $_SESSION['attnum']++ ?>>
      </form>
   <br>
   <br> 
   <div>
<p>Ebben a mezőben megadhatja, hogy milyen véleménnyel van rólunk:</p>
          <form action="profile.php" method="GET">
          <textarea name="box" rows="5" cols="50" maxlength="400" placeholder="Írja be a véleményét! (maximum 400 karakter)"> </textarea><br/>
          <input type="submit" name="comment" value="elküldés">
          </form>

          <?php 

          $comm = "";
          if(isset($_GET["comment"])){
            $felh = $_SESSION["user"]["felhasznalonev"];
            $comm = $_GET["box"];
            $file = fopen("comments.txt", "a");
            $adat[] = ['felhasznalonev' => $felh, 'komment' => $comm, 'profilkep' => $profil];
            
            fwrite($file, serialize($adat) . "\n");
          }

          ?>

   </div>  

</main>
    
</body>
</html>