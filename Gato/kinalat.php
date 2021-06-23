<?php
    if(!session_id()) session_start();

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Faragó Ákos, Oláh Balázs"/>
    <meta name="description" content="Macska webshop, ahol mindenféle macska kapható"/>
    <meta name="keywords" content="macska, eladó, webshop, gato, cat, macskafogó"/>
    <title>Kinalat</title>
    <link rel="icon" href="img/titleimg/giovanni.png" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/galleria.css" />
    <style>
        .tarolo {
            position: relative;
            width: 100%;
        }

        .image {
            display: block;
            width: 400px;
            height: 300px;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 300px;
            width: 400px;
            opacity: 0;
            transition: .5s ease;
            background-color: #008CBA;
        }

        .tarolo:hover .overlay {
            opacity: 1;
        }

        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>
<body style="background-image: url(2.jpg);">

<nav id="navbar">
    <ul>
        <li id="menu">
            <button class="legordulogomb">
                Menü
                <i class="lemegy"></i>
            </button>
            <ul class="menugombok">
                <li id='GATOmenu'><a href="index.php">Gato</a></li>
                <li><a href="tortenet.php" >Történet</a></li>
                <li><a href="kinalat.php" style="color: #CCCCCC">Kínálat</a></li>
                <li><a href="specs.php">Specifikációk</a></li>
                <?php if(isset($_SESSION["user"])) {?>
                        <li><a href="profile.php">Profil</a></li>
                        <li><a href="logout.php">Kijelentkezés</a></li>
                        <?php } else { ?>
                        <li><a href="user.php">Bejelentkezés/Regisztráció</a></li>
                        <?php } ?>
            </ul>
        </li>
        <li class='gombok' id='GATO'><a href="index.php">Gato</a></li>
        <li class='gombok'><a href="tortenet.php" >Történet</a></li>
        <li class='gombok'><a href="kinalat.php" style="color: #CCCCCC">Kínálat</a></li>
        <li class='gombok'><a href="specs.php">Specifikációk</a></li>
        <?php if(isset($_SESSION["user"])) {?>
                <li class='gombok'><a href="profile.php">Profil</a></li>
                <li class='gombok'><a href="logout.php">Kijelentkezés</a></li>
                <?php } else { ?>
                <li class='gombok'><a href="user.php">Bejelentkezés/Regisztráció</a></li>
                <?php } ?>
    </ul>
</nav>



<div class="sor" >
    <div class="oszlop">
        <div class="tarolo">
            <img src="img/elado/smart.png" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
        <div class="tarolo">
            <img src="img/elado/smol.jpg" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
        <div class="tarolo">
            <img src="img/elado/bread.jpg" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
        <div class="tarolo">
            <img src="img/elado/ball.jpeg" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
    </div>
    <div class="oszlop">
        <div class="tarolo">
            <img src="img/elado/schwartz.jpg" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
        <div class="tarolo">
            <img src="img/elado/tajfel.png" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
        <div class="tarolo">
            <img src="img/elado/garfield-macska.jpg" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
        <div class="tarolo">
            <img src="img/elado/tom.png" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
    </div>
    <div class="oszlop">
        <div class="tarolo">
            <img src="img/elado/nyan.png" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
        <div class="tarolo">
            <img src="img/elado/meme.jpg" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
        <div class="tarolo">
            <img src="img/elado/grumpy.jpg" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
        <div class="tarolo">
            <img src="img/elado/pusheen.png" class="image" alt="Mlem" title="nyaelakszik">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
    </div>
</div>

<footer>
    Minden jog fenntartva. Készítette: Faragó Ákos és Oláh Balázs.<br>
    A készítés során egyetlen macska sem sérült meg...
</footer>

</body>
</html>