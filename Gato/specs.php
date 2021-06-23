<?php
    if(!session_id()) session_start();

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Specifikációk</title>
    <meta name="author" content="Faragó Ákos, Oláh Balázs"/>
    <meta name="description" content="Macska webshop, ahol mindenféle macska kapható"/>
    <meta name="keywords" content="macska, eladó, webshop, gato, cat, macskafogó"/>
    <link rel="icon" href="img/titleimg/giovanni.png" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/specs.css" />
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
                        <li id='GATOmenu'><a href="index.php">Gato</a></li>
                        <li><a href="tortenet.php" >Történet</a></li>
                        <li><a href="kinalat.php">Kínálat</a></li>
                        <li><a href="specs.php" style="color: #CCCCCC">Specifikációk</a></li>
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
                <li class='gombok'><a href="kinalat.php">Kínálat</a></li>
                <li class='gombok'><a href="specs.php" style="color: #CCCCCC">Specifikációk</a></li>
                <?php if(isset($_SESSION["user"])) {?>
                <li class='gombok'><a href="profile.php">Profil</a></li>
                <li class='gombok'><a href="logout.php">Kijelentkezés</a></li>
                <?php } else { ?>
                <li class='gombok'><a href="user.php">Bejelentkezés/Regisztráció</a></li>
                <?php } ?>
            </ul>
        </nav>

        <div id="cim">
            <p id="foszoveg">Az általunk árusított macskák specifikációi</p>
        </div>

        <div class="specsgrid">
            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/smart.png" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev">Alkatrész megnevezése</th>
                            <th id="tipus">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev">
                                Processzor:
                            </td>
                            <td headers="tipus">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev">
                                Memória:
                            </td>
                            <td headers="tipus">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev">
                                Tárhely:
                            </td>
                            <td headers="tipus">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev">
                                Látóegység:
                            </td>
                            <td headers="tipus">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/schwartz.jpg" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev2">Alkatrész megnevezése</th>
                            <th id="tipus2">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev2">
                                Processzor:
                            </td>
                            <td headers="tipus2">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev2">
                                Memória:
                            </td>
                            <td headers="tipus2">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev2">
                                Tárhely:
                            </td>
                            <td headers="tipus2">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev2">
                                Látóegység:
                            </td>
                            <td headers="tipus2">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev2">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus2">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/nyan.png" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev3">Alkatrész megnevezése</th>
                            <th id="tipus3">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev3">
                                Processzor:
                            </td>
                            <td headers="tipus3">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev3">
                                Memória:
                            </td>
                            <td headers="tipus3">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev3">
                                Tárhely:
                            </td>
                            <td headers="tipus3">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev3">
                                Látóegység:
                            </td>
                            <td headers="tipus3">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev3">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus3">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/smol.jpg" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev4">Alkatrész megnevezése</th>
                            <th id="tipus4">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev4">
                                Processzor:
                            </td>
                            <td headers="tipus4">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev4">
                                Memória:
                            </td>
                            <td headers="tipus4">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev4">
                                Tárhely:
                            </td>
                            <td headers="tipus4">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev4">
                                Látóegység:
                            </td>
                            <td headers="tipus4">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev4">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus4">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/tajfel.png" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev5">Alkatrész megnevezése</th>
                            <th id="tipus5">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev5">
                                Processzor:
                            </td>
                            <td headers="tipus5">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev5">
                                Memória:
                            </td>
                            <td headers="tipus5">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev5">
                                Tárhely:
                            </td>
                            <td headers="tipus5">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev5">
                                Látóegység:
                            </td>
                            <td headers="tipus5">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev5">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus5">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/meme.jpg" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev6">Alkatrész megnevezése</th>
                            <th id="tipus6">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev6">
                                Processzor:
                            </td>
                            <td headers="tipus6">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev6">
                                Memória:
                            </td>
                            <td headers="tipus6">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev6">
                                Tárhely:
                            </td>
                            <td headers="tipus6">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev6">
                                Látóegység:
                            </td>
                            <td headers="tipus6">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev6">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus6">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/bread.jpg" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev7">Alkatrész megnevezése</th>
                            <th id="tipus7">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev7">
                                Processzor:
                            </td>
                            <td headers="tipus7">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev7">
                                Memória:
                            </td>
                            <td headers="tipus7">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev7">
                                Tárhely:
                            </td>
                            <td headers="tipus7">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev7">
                                Látóegység:
                            </td>
                            <td headers="tipus7">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev7">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus7">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/garfield-macska.jpg" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev8">Alkatrész megnevezése</th>
                            <th id="tipus8">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev8">
                                Processzor:
                            </td>
                            <td headers="tipus8">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev8">
                                Memória:
                            </td>
                            <td headers="tipus8">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev8">
                                Tárhely:
                            </td>
                            <td headers="tipus8">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev8">
                                Látóegység:
                            </td>
                            <td headers="tipus8">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev8">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus8">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/grumpy.jpg" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev9">Alkatrész megnevezése</th>
                            <th id="tipus9">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev9">
                                Processzor:
                            </td>
                            <td headers="tipus9">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev9">
                                Memória:
                            </td>
                            <td headers="tipus9">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev9">
                                Tárhely:
                            </td>
                            <td headers="tipus9">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev9">
                                Látóegység:
                            </td>
                            <td headers="tipus9">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev9">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus9">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/ball.jpeg" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev10">Alkatrész megnevezése</th>
                            <th id="tipus10">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev10">
                                Processzor:
                            </td>
                            <td headers="tipus10">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev10">
                                Memória:
                            </td>
                            <td headers="tipus10">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev10">
                                Tárhely:
                            </td>
                            <td headers="tipus10">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev10">
                                Látóegység:
                            </td>
                            <td headers="tipus10">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev10">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus10">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/tom.png" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev11">Alkatrész megnevezése</th>
                            <th id="tipus11">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev11">
                                Processzor:
                            </td>
                            <td headers="tipus11">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev11">
                                Memória:
                            </td>
                            <td headers="tipus11">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev11">
                                Tárhely:
                            </td>
                            <td headers="tipus11">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev11">
                                Látóegység:
                            </td>
                            <td headers="tipus11">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev11">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus11">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tarolo">
                <div class="kep">
                    <img alt="macska1" src="img/elado/pusheen.png" style="width: 90%; height: 90%;">
                </div>
                <div class="tablazat">
                    <table>
                        <tr>
                            <th id="megnev12">Alkatrész megnevezése</th>
                            <th id="tipus12">Alkatrész típusa</th>
                        </tr>
                        <tr>
                            <td headers="megnev12">
                                Processzor:
                            </td>
                            <td headers="tipus12">
                                G14
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev12">
                                Memória:
                            </td>
                            <td headers="tipus12">
                                16GB
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev12">
                                Tárhely:
                            </td>
                            <td headers="tipus12">
                                1 liter
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev12">
                                Látóegység:
                            </td>
                            <td headers="tipus12">
                                2db 4K-s lencse
                            </td>
                        </tr>
                        <tr>
                            <td headers="megnev12">
                                Anyaghasználat:
                            </td>
                            <td headers="tipus12">
                                Szőr, bőr, nyál
                            </td>
                        </tr>
                    </table>
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