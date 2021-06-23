<?php
    session_start();
   
    /*
    if(isset($_POST["reg"])){
        
    }
    setcookie("felhaszn", "", time() + 86400 * 30);
    setcookie("email", "", time() + 86400 * 30);
    setcookie("szuletesiido", "", time() + 86400 * 30);
    setcookie("telefonszam", "", time() + 86400 * 30);
    setcookie("nev", "", time() + 86400 * 30);
    */
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Faragó Ákos, Oláh Balázs"/>
    <meta name="description" content="Macska webshop, ahol mindenféle macska kapható"/>
    <meta name="keywords" content="macska, eladó, webshop, gato, cat, macskafogó"/>
    <title>Felhasznalo</title>
    <link rel="icon" type="text/css" href="img/titleimg/giovanni.png" />

    <link rel="stylesheet" href="css/user.css"/>
</head>
<body>
   
<section>
    <div class="container">
        <div class="user signiBx">
            <div class="imgBx"><img src="img/user_img/cat2.jpg" alt="cicae"></div>
            <div class="formBx">
                <form action="registration.php" method="POST" enctype="multipart/form-data">
                    <h2>Registration</h2>
                    <label>E-mail cím <input type="email" name="email" placeholder="macska@gmail.com" required></label>

                    <label>Felhasználónév <input type="text" name="felhasznalonev" placeholder="Példa: Pisti2021" required></label>

                    <label>Név <input type="text" name="textx" placeholder="Példa: Ákos Faragó" required></label>

                    <label>Születési idő: <input type="date" name="szulido" value="2000-01-01" min="1900-01-01" max="2021-04-08" required></label>


                    <label>Jelszó <input type="password" name="password" placeholder="*********" required></label>

                    <label>Jelszó újra <input type="password" name="password2" placeholder="*********" required></label>

                    <label>Telefonszám <input type="tel" name="phonenum" placeholder="06301234567"></label>

                    <label>Elfogadom a felhasználói feltételeket <input type="checkbox" name="acceptito" required></label>
                    <label for="filee" name="cicaee">Cicás profil<input type="file" name="prof" accept="image/*"/></label>

                    <input type="reset" value="Alaphelyzet visszaállítása">
                    <input type="hidden" name="rejtett" value="1234">


                    <input type="submit" name="reg" value="Regisztrálok">
                    <p class="signup">Van már fiókod? <a href="user.php">Bejelentkezés</a></p>
                    <p class="signup"><a href="index.php">Vissza a Főmenűbe</a></p>
                </form>

                <?php 
                $user = "";
                $pass = "";
                $pass2 = "";
                $szulido = "";
                $telszam = "";
                $feltdb = 0;
                $errors = [];
                $nev = "";

                include "fuggvenyek.php";

                $fiokok = loadUsers("adatok.txt");
               
                if(isset($_POST["reg"])){
                    
                    $user = $_POST["felhasznalonev"];
                    $pass = $_POST["password"];
                    $pass2 = $_POST["password2"];
                    $emailcim = $_POST["email"];
                    $szulido = $_POST["szulido"];
                    $telszam = $_POST["phonenum"];
                    $nev = $_POST["textx"];

                    if(isset($_POST["acceptito"])){
                        $feltdb++;
                    }

                   foreach($fiokok as $fiok){
                        if($fiok["felhasznalonev"] === $user){
                            $errors[] = "A felhasználónév már foglalt!";
                        }
                    }

                    if(strlen($pass) < 6){
                        $errors[] = "A jelszónak 6 karakternél hosszabbnak kell lennie!";
                    }

                    if(!preg_match('/[A-Z]/', $pass))  {
                        $errors[] = "A jelszó nem tartalmaz nagybetűket!";
                    }                 
                    if(!preg_match('/[a-z]/', $pass)){
                        $errors[] = "A jelszó nem tartalmaz kisbetűket!";
                    }

                    if(!preg_match('/[0-9]/', $pass)){
                        $errors[] = "A jelszó nem tartalmaz számot!";
                    }

                    if($pass !== $pass2){
                        $errors[] = "A jelszavak nem egyeznek!";
                    }
                    
                    $szul = new DateTime($szulido);
                    $now = new DateTime();
                    $difference = $now->diff($szul);
                    $age = $difference->y;


                    if($age < 6){
                        $errors[] = "A kornak meg kell haladnia a 6 életévet a tzitza rendeléshez!";
                    }
                    
                    if($feltdb != 1){
                        $errors[] = "A felhasználási feltételeket el kell fogadnia a regisztrációhoz!";
                    }

                    $fajlfeltoltes_hiba = "";
                    uploadProfilePicture($user);

                    if($fajlfeltoltes_hiba !== ""){
                        $hibak[] = $fajlfeltoltes_hiba;
                    }

                    
                
                    if(count($errors) === 0){
                        
                        $fiokok[] = ['felhasznalonev' => $user, 'password' => $pass, 'email' => $emailcim, 'telefonszam' => $telszam, 'szuletesiido' => $szulido, 'nev' => $nev];
                        saveUsers("adatok.txt", $fiokok);
                        echo "Sikres regisztráció! <br>";
                        header("Location: user.php");                        
                    } else{
                        foreach($errors as $hibak){
                            echo $hibak . "<br>";
                        }
                    }
                }

               
                ?>
            </div>
        </div>
    </div>
</section>

</body>
</html>