<?php
    if(!session_id()) session_start();
    
    


    
    $bejelentkezesek = 0;

    if(isset($_COOKIE["bejelentkezesek"])){
        $bejelentkezesek = $_COOKIE["bejelentkezesek"] + 1;
    }


    setcookie("bejelentkezesek", $bejelentkezesek, time() + 86400 * 30 * 12 * 10);

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
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" type="text/css" media ="print" href="css/print.css">
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
                        <li id='GATOmenu'><a href="index.php" style="color: #CCCCCC">Gato</a></li>
                        <li><a href="tortenet.php" >Történet</a></li>
                        <li><a href="kinalat.php">Kínálat</a></li>
                        <li><a href="specs.php">Specifikációk</a></li>
                        
                         <?php if(isset($_SESSION["user"])) {?>
                        <li><a href="profile.php">Profil</a></li>
                        <li><a href="logout.php">Kijelentkezés</a></li>
                        <?php } else { ?>
                        <li><a href="user.php">Bejelentkezés/Regisztráció</a></li>
                        <?php } ?>
                        <?php if(isset($_COOKIE["bejelentkezesek"])) {?>
                        <li><a href="deletecookie.php">Sütik tiltása</a></li>
                        <?php } else{}?>
                        
                    </ul>
                </li>
                <li class='gombok' id='GATO'><a href="index.php" style="color: #CCCCCC">Gato</a></li>
                <li class='gombok'><a href="tortenet.php" >Történet</a></li>
                <li class='gombok'><a href="kinalat.php">Kínálat</a></li>
                <li class='gombok'><a href="specs.php">Specifikációk</a></li>
                
                <?php if(isset($_SESSION["user"])) {?>
                <li class='gombok'><a href="profile.php">Profil</a></li>
                <li class='gombok'><a href="logout.php">Kijelentkezés</a></li>
                <?php } else { ?>
                <li class='gombok'><a href="user.php">Bejelentkezés/Regisztráció</a></li>
                <?php } ?>

                <?php if(isset($_COOKIE["bejelentkezesek"])) {?>
                <li class="gombok"><a href="deletecookie.php">Sütik tiltása</a></li>
                <?php } else {}?>


            </ul>
        </nav>
        <header>
            Felkészültünk mi is a Covid-19-re: rendeléseinket érintésmenetesen kézbesítjük!<br>
            Ráadásul online leadott rendeléseink mellé ajándék kisegér jár!
        </header>
        <div class="udvozlo">
            <h1>Piacvezető vállalat a macskák értékesítésében</h1>
            <img alt="Egy cica" id="fooldalcica" src="img/pexels-pixabay-45201.jpg">
            <section class="info">
                <div>
                    <p>1978 óta minőségi macskák tenyésztése, árusítása. Elsőrendű cicák!</p>
                    <p>A Gato macskái tökéletesek!</p>
                </div>
            </section>
        </div>

        <div class="tablazatfake">
            <div class="tarolo">
                <div class="oszlop">
                    <div class="grid-text">
                        <p id="fejlesztesek" style="letter-spacing: 5px">Az új cica (Gato) előnyei:</p>
                    </div>
                </div>
            </div>

            <div class="tarolo">
                <div class="oszlop">
                    <div class="grid-text">
                        <p id="neuraltext">A Gato új saját fejlesztése: <b>Gatoral Engine</b> (<i>Neural Engine</i>)</p>
                    </div>

                    <div class="grid-pic">
                        <img alt="Neurális hálózat" id="neuralpic" src="img/neural.jpg">
                    </div>
                </div>

                <div class="oszlop">
                    <div class="grid-text">
                        <p id="anatomytext">Az általunk fejlesztett, és értékesített macskák (gatok) <mark>50%</mark>-kal erősebb testalkatúak a hagyományos macskákhoz képest.</p>
                    </div>
                    <div class="grid-pic">
                        <img alt="A macska felépítése" id="anatomypic" src="img/anatomy2.jpg">
                    </div>
                </div>
            </div>

            <div class="tarolo">
                <div class="oszlop">
                    <div class="grid-text">
                        <p id="cputext">Az újgenerációs <u>G14</u> SoC (System on Chip) 60%-os teljesítménynövekedést hozott!</p>
                    </div>
                    <div class="grid-pic">
                        <img alt="A macska CPU-ja" id="cpupic" src="img/cpu.jpg">
                    </div>
                </div>
                <div class="oszlop">
                    <div class="grid-text">
                        <p id="chonktext"><strong>Chonky</strong> macskáink is vannak!!!</p>
                    </div>
                    <div class="grid-pic">
                        <img alt="Chonky boi" id="chonkpic" src="img/chonky-cat-photo.jpg">
                    </div>
                </div>
            </div>
        </div>

        <footer>
            Minden jog fenntartva. Készítette: Faragó Ákos és Oláh Balázs.<br>
            A készítés során egyetlen macska sem sérült meg...
        </footer>
    </main>
</body>
</html>