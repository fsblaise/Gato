<?php
    if(!session_id()) session_start();
    include("fuggvenyek.php");


    

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Faragó Ákos, Oláh Balázs"/>
    <meta name="description" content="Macska webshop, ahol mindenféle macska kapható"/>
    <meta name="keywords" content="macska, eladó, webshop, gato, cat, macskafogó"/>
    <title>Történet</title>
    <link rel="icon" href="img/titleimg/giovanni.png" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/tortenet.css"/>
    <style>
        #kisnavi{
            background: rgba(169, 169, 169, 0.9);
            display: block;
            width: 20%;
            margin: 7% auto 0 auto;
            font-weight: 900;
            text-align: center;
            list-style: none;
        }

        #kisnavi li{
            list-style: none;
        }
    </style>
</head>
<body>
<nav id="navbar">
    <ul>
        <li id="menu">
            <button class="legordulogomb">
                Menü
                <i class="lemegy"></i>
            </button>
            <ul class="menugombok">
                <li id='GATOmenu'><a href="index.php">Gato</a></li>
                <li><a href="tortenet.php" style="color: #CCCCCC">Történet</a></li>
                <li><a href="kinalat.php">Kínálat</a></li>
                <li><a href="specs.php">Specifikációk</a></li>
                <?php if(isset($_SESSION["user"])) {?>
                        <li><a href="profile.php">Profil</a></li>
                        <li><a href="logout.php">Kijelentkezés</a></li>
                        <?php } else { ?>}
                        <li><a href="user.php">Bejelentkezés/Regisztráció</a></li>
                        <?php } ?>
            </ul>
        </li>
        <li class='gombok' id='GATO'><a href="index.php">Gato</a></li>
        <li class='gombok'><a href="tortenet.php" style="color: #CCCCCC">Történet</a></li>
        <li class='gombok'><a href="kinalat.php">Kínálat</a></li>
        <li class='gombok'><a href="specs.php">Specifikációk</a></li>
        <?php if(isset($_SESSION["user"])) {?>
                <li class='gombok'><a href="profile.php">Profil</a></li>
                <li class='gombok'><a href="logout.php">Kijelentkezés</a></li>
                <?php } else { ?>
                <li class='gombok'><a href="user.php">Bejelentkezés/Regisztráció</a></li>
                <?php } ?>
    </ul>
</nav>
<div>
    <p style="text-align: center; font-size: 25px;"><i>Egyszer, még annak idején 70-ben, ültünk a fatövében Balázs cimborámmal, mikor is a nyancat megszóltalt, s ahogy elment egy gyönyörű fekete kóbor cica előttünk tudtuk, hogy mi a cicáknak fogjuk szentelni az életünket.</i></p>
</div>

<aside id="kisnavi">
    <ul>
        <li><a href="#1">Az új cicák (videó)</a></li>
        <li><a href="#2">Facebook vélemény</a></li>
        <li><a href="#3">Cato Lisa, macska wiki</a></li>
        <li><a href="#4">Zene</a></li>
        <li><a href="#5">Dalszöveg</a></li>
    </ul>
</aside>

<a id="1"></a>
<div style="margin-top: 150px; text-align: center;">
    <p><b>Íme egy videó, a következő nemzedék mestercicáiról:</b></p>
    <video width="1000"  controls>
        <source src="audio_video/kittykitty.mp4" type="video/mp4">
        <source src="audio_video/kittykitty.ogg" type="video/ogg">
        A böngésző, amelyet használ nem támogatja az adott formátumot!
    </video>
</div>
<div>
    <p style="font-size: 25px; text-align: center; margin-top: 50px;">
        <i>"Mivel túl sok az utcai cica, ezért örökbe fogadtuk őket, és szuper erőt adtunk nekik, így minden kóbor cica szuper cica lesz, akik hozzánk kerülnek. Ezzel próbáljuk megállítani a cicák kóbor életre való jutását, s ezzel felkészítjük őket, hogy a világot jobbá tehessék, megmenthessék!"</i>
    </p>
</div>
<?php 
    $file = loadUsers("comments.txt");
    if(count($file) === 0) {
        $file["komment"] = "Nagyszerű weboldal, tetszik minden!";
        $file["felhasznalonev"] = "Proba Istvan";
        $file["profilkep"] = "sadcat.jpg";
    }
    else{
    $randomszam = rand(0, count($file)-1);
   
    
    $file = $file[$randomszam][0];
    }
    
    

?>

<a id="2"></a>
<article style="border: 10px solid transparent; border-image: url('img/rainbow.png') 20 round; margin-top: 20px; margin-bottom: 20px;">
    <h2>Egy kedves felhasználónk, az-az <?php echo $file["felhasznalonev"]?> véleménye:</h2>
    <img src="<?php echo $file["profilkep"]; ?>" width="225">
    <div>
        <q style="font-size: 40px; vertical-align: top"><?php echo $file["komment"]?></q>
    </div>
</article >

<a id="3"></a>
<div style="margin-left: auto; margin-right: auto; width: 80%">
    <div style="display: inline-block">
        <img alt="Mona Lisa macskával" src="img/gatolista.png" style="width: 600px; height: 800px">
        <p><cite>Cato Lisa:</cite>festette Leonardo daVinci 1503-ban.</p>
    </div>
    <iframe src="https://hu.wikipedia.org/wiki/Macska" width="800" height="800" style="display: inline-block; margin-top: auto; margin-bottom: auto;">Macska wiki oldala</iframe>
</div>


<div style="margin-left: auto; margin-right: auto; text-align: center; margin-top: 150px;">
    <pre style="font-size: 40px; font-weight: bolder">MINDENÜNK          A           CICA!!!!!!</pre>
</div>

<a id="4"></a>
<div style="text-align: center; margin-top: 150px;">
    <audio controls>
        <source src="audio_video/nyancat.mp3" type="audio/mpeg">
        <source src="audio_video/nyancat.ogg" type="audio/ogg">
        A böngésző, amelyet használ nem támogatja az adott formátumot!
    </audio>
    <p>Itt található egy dalszöveg, mely minket motivál a Cicákkal való foglalkozásra minden alkalommal:</p>

    <a id="5"></a>
    <blockquote id="shadowBox" class="rainbow" style="column-count: 3">
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
        Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan
    </blockquote>

    <div style="margin: 150px 0 150px 0;">
        <p style="color: magenta">miaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiaumiau<wbr>ígynyávogamacska</p>
    </div>
</div>
<footer>
    Minden jog fenntartva. Készítette: Faragó Ákos és Oláh Balázs.<br>
    A készítés során egyetlen macska sem sérült meg...
</footer>


</body>
</html>