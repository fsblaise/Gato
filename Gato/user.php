<?php
    session_start();
    


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
                <form action="user.php" method="POST">
                    <h2>Bejelentkezés</h2>
                    <label>Felhasználónév <input type="text" name="felhasznalonev" placeholder="Felhasználónév"></label>

                    <label>Jelszó <input type="password" name="password" placeholder="Jelszó"></label>

                    <input type="submit" name="login" value="Bejelentkezés">
                    <p class="signup">Nincs még fiókod? <a href="registration.php">Regisztráció</a></p>
                    <p class="signup"><a href="index.php">Vissza a Főmenűbe</a></p>
                </form>
                
                <?php 
                include "fuggvenyek.php";
                $user = "";
                $password = "";

                $msg = "Sikertelen belépés!";

                $fiokok = loadUsers("adatok.txt");
                


                if(isset($_POST["login"])){
                    if (!isset($_POST["felhasznalonev"]) || trim($_POST["felhasznalonev"]) === "" || !isset($_POST["password"]) || trim($_POST["password"]) === "") {
                        
                        $uzenet = "<strong>Hiba:</strong> Nincsm egadva minden adat!";
                        echo $uzenet . "<br/>";
                        
                    } else{
                        $user = $_POST["felhasznalonev"];
                        $password = $_POST["password"];

                        foreach($fiokok as $fiok){
                            if($fiok["felhasznalonev"] === $user && $fiok["password"] === $password){
                                setLastLog();
                                $msg = "Sikeres belépés!";
                                $_SESSION["user"] = $fiok;
                                header("Location: profile.php");
                            } else{
                                echo "Hibás Felhasználónév vagy jelszó!" . "<br>";
                            }
                            
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