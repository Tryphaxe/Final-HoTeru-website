<?php
include './hoteru/includes/functions.php';
//var_dump(searchByItem(16,'',2));
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HoTeru | Trouvez l'hôtel qu'il vous faut !</title>

        <!-- ===========IMPORT STYLE CSS============ -->
        <link rel="stylesheet" href="./css/style.css">

        <!-- ===========IMPORT BOOTSTRAP STYLE CSS============ -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

        <!-- ===============IMPORT FONT AWESOME ICON CDN=============== -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

        <!-- ===========IMPORT FAVICON============ -->
        <link rel="shortcut icon" href="./im/favicon.png" type="image/x-icon">

        <!-- IMPORTATION GOOGLE FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400;0,500;1,400&family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Slick slider -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    </head>

    <body>
        <nav>
            <a href="./index.php" class="nav-icon" aria-label="homepage" aria-current="page">
                <img src="./im/hoteruicon.png" alt="HoTeru icon" />
                <span>HoTeru</span>
            </a>

            <div class="main-navlinks">
                <button type="button" class="hamburger" aria-label="Toggle Navigation" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="navlinks">
                    <a href="./index.php" arial-current="page" class="nav-link" style="color: #ff9677;">Acceuil</a>
                    <a href="./html/hoterupro.php" class="nav-link">HoTeru Pro</a>
                    <a href="./html/carte.php" class="nav-link">Carte</a>
                    <a href="./html/contact.php" class="nav-link">Contacts</a>
                    <a href="./html/about.php" class="nav-link">A propos</a>
                </div>
            </div>

            <div class="nav-authentication">
                <a href="./html/connexion.php" class="user-toggler" aria-label="Sign in page">
                    <i class="fa-solid fa-user"></i>
                </a>
                <div class="">
                    <?php if (isset($_SESSION['hoteruUser'])) { ?>
                        <div class="dropdown text-end">
                            <a href="#" style="border:none;" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="Le" width="32" height="32" class="rounded-circle" _mstalt="33306" _msthash="42">
                                <span><?= @$_SESSION['hoteruUser'] ?></span>
                            </a>
                            <ul class="dropdown-menu text-small">
                                <li _mstvisible="1"><a class="dropdown-item" href="#">Hôtels déjà visités</a></li>
                                <li _mstvisible="1"><a class="dropdown-item" href="#">Favoris</a></li>
                                <li _mstvisible="1"><a class="dropdown-item" href="#">Aide</a></li>
                                <li _mstvisible="1"><hr class="dropdown-divider"></li>
                                <li _mstvisible="1"><a class="dropdown-item" href="html/deconnexion.php">Se déconnecter</a></li>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <a href="./html/connexion.php" class="connect button1 sign-btns">
                            <i class="fa-solid fa-user" style="margin-right: 8px;"></i>Se connecter
                        </a>
                        <a href="./html/user_inscription.php" class="connect button2 sign-btns un">
                            <i class="fa-solid fa-user-plus" style="margin-right: 8px;"></i>S'inscrire
                        </a>
                    <?php } ?>

                </div>
            </div>
        </nav>
        <script src="./js/scriptham.js"></script>


        <!-- ===========BACKGROUND============ -->

        <div class="bg">
            <div class="bg-content">
                <p>Trouvez Un Hôtel Rapidement...</p>

                <span>Un endroit parfait pour des weekend et vacances incroyable</span>


                <form action="index.php?#liste-hotel" method="post" class="card-re mr-3">
                    <div class="search-input">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="name" id="" class="sea" placeholder="Rechercher avec le nom de l'hôtel...">
                    </div>
                    <hr>
                    <titre>Ou rechercher par :</titre>
                    <div class="cdd">
                        <div class="cd zone">
                            <label for="zone" class="titre"><i class="fa-solid fa-map-location-dot"></i>Zone</label>
                            <select id="zone" required name="zone">
                                <option value="">Choisir...</option>
                                <?php
                                foreach (getAll("ville") as $ville) {
                                    ?>
                                    <option value="<?= $ville['id'] ?>"><?= $ville['nom_ville'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="cd quart">
                            <label for="quartier" class="titre"><i class="fa-solid fa-crosshairs"></i>Quartier</label>
                            <select id="quartier_id" name="quartier_id">
                                <option value="">Choisir...</option>
                            </select>
                        </div>
                        <div class="cd vices">
                            <label for="services" class="titre"><i class="fa-solid fa-square-plus"></i>Services</label>
                            <select id="services" name="services" >
                                <option value="">Choisir...</option>
                                <?php foreach (getAll("services") as $service) { ?>
                                    <option value="<?= $service['id'] ?>"><?= $service['nom'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <input type="submit" name="btnRechercher" id="res" value="Rechercher">
                    </div>
                </form>

                <!-- +++++++++++++++++++++++++++++++++++++++++ -->

                <!-- <form action="" method="GET" class="block-search mr-3">
                        <div class="service">
                            <span style="color: black;">Services</span>
                            <div class="serv">
                                <input type="checkbox" name="" id="option1">
                                <label for="option1"> <img src="./im/1x/pool.png" alt=""> Piscine</label>
                                <input type="checkbox" name="" id="option2">
                                <label for="option2"> <img src="./im/1x/wifi.png" alt=""> Wifi</label>
                                <input type="checkbox" name="" id="option3">
                                <label for="option3"> <img src="./im/1x/clim.png" alt=""> Clim</label>
                                <input type="checkbox" name="" id="option4">
                                <label for="option4"> <img src="./im/1x/restaurant.png" alt=""> Restau</label>
                                <input type="checkbox" name="" id="option5">
                                <label for="option5"> <img src="./im/1x/emoji_food_beverage.png" alt=""> Ptit dej</label>
                            </div>
                        </div>
                        <div class="research">
                            <div class="search">
                                <span style="color: black;">Position</span>
                                <form class="card p-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Exemple : Abidjan">
                                        <button type="submit" class="btn"
                                                style="background-color: #550032; color: #ffffff;">Rechercher</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>-->
            </div>
        </div> 

        <!-- ==================CODE HERO PUB MAB================== -->

        <div class="container col-xxl-8 px-2 py-2">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="./im/hot map real.png" class="d-block mx-lg-auto img-fluid rounded-3" alt="Carte HoTeru" width="700" height="500" loading="lazy" _mstalt="287586" _msthash="16">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Trouvez les hôtels proches de vous...</h1>
                    <p class="lead" style="font-size: 20px;">Regardez sur la carte et trouvez l'hôtel le plus proche en
                        fonction de votre position !</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="./html/carte.php" class="me-md-2 fw-bold" style="background-color: #ff9677; text-decoration: none; padding: 10px 40px; border-radius: 10px; color: rgb(255, 255, 255);">
                            <i class="fa-solid fa-map-location-dot mr-2"></i>
                            Voir la carte
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- ===============CODE POUR LE CORPS DE LA PAGE (LISTE DES HOTELS)================ -->

        <div class="album py-4 bg-body-tertiary">
            <div class="container">
                <h2 class="fw-bold fs-3 my-4" style="color: #ff9677;">Nos hôtels...</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 my-3">
                    <?php
                        $hotels = getAll("hotel");
                        $length = count($hotels);

                        // Afficher seulement les 5 premiers hôtels
                        for ($i = 0; $i < min(5, $length); $i++) {
                            $imgHotel = getOneByItem("hotel_img", "hotel_id", $hotels[$i]['id']);
                            $ville = getOneByItem("ville","id",$hotels[$i]["ville"]);
                            $quartier = getOneByItem("quartier","id",$hotels[$i]["quartier_id"]);
                    ?>

                    <div class="col">
                        <div class="card rounded-4">
                            <img src="./hoteru/hotel_img/<?= empty($imgHotel['path']) ? 'defaut.png' : $imgHotel['path'] ?>" alt="L'image de l'hôtel" class="card-img-top rounded-4 border-2 img-fluid" style="height: 230px; max-width: 100%;">
                            <div class="card-body">
                                <h5 class="card-tittle text-uppercase fs-3" style="font-family: 'Afacad', sans-serif; font-weight: 500;"><?= $hotels[$i]['name'] ?></h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary my-2 fs-5" style="font-family: 'Afacad', sans-serif; "><i class="fa-solid fa-location-dot"></i> <?= $ville['nom_ville'] ?>, <?= $quartier['nom'] ?></h6>
                                <div class="card-text text-truncate" style="max-width: 200px; height: 30px;">
                                    <span><?= $hotels[$i]['description'] ?></span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between py-2">
                                    <label class="fs-7 fw-bold"><i class="fa-solid fa-coins" style="color: green;"></i> <?= number_format($hotels[$i]['min_price']) ?> Fcfa / Nuit</label>
                                    <a href="./html/description_hotel.php?hotel_id=<?= $hotels[$i]['id'] ?>&hot=<?= md5('hoteruPro') ?>&ch=<?= md5('hoteruPro') ?>" class="btn" style="background-color: #550032; color: white;">Voir +</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
                <a href="#" class="more rounded-3 d-flex align-items-center justify-content">Voir plus...</a>
            </div>
        </div>

        <!-- <div class="container" id="liste-hotel" >
            <div id="header">
                <h1>5 étoiles</h1>
                <a href="" class="more" style="margin: 0; color: white;">Voir tout</a>
            </div>
            <div class="slider-wrapper">
                <div class="slider slider1">
                    <?php //include './liste_hot.php'; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="header">
                <h1>Populaires</h1>
                <a href="" class="more" style="margin: 0; color: white">Voir tout</a>
            </div>
            <div class="slider-wrapper">
                <div class="slider slider2">
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!
                                </label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="header">
                <h1>Nouveaux</h1>
                <a href="" class="more" style="margin: 0; color: white">Voir tout</a>
            </div>
            <div class="slider-wrapper">
                <div class="slider slider3">
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!
                                </label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="block-bg">
                            <label class="reduc">
                                70% Off
                            </label>
                        </div>
                        <div class="block-info">
                            <div class="block-nom">
                                <label>Azalai</label>
                            </div>
                            <div class="block-des">
                                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus alias soluta,
                                    adipisci
                                    est quidem!</label>
                            </div>
                            <div class="block-serv">
                                <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                                <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                            </div>
                            <div class="block-plus">
                                <label>50.000 Fcfa / Nuit</label>
                                <a href="./html/description_hotel.php" class="plus">Voir +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <script src="./js/main.js"></script> -->
        <!-- ==============SCRIPT slider=============== -->
        

        <!-- CODE HERO POUR INSCRIPTION UTILISATEUR-->
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis" _msttexthash="1631227" _msthash="30">
                        Détendez-vous
                        !</h1>
                    <p class="lead" _msttexthash="44418985" _msthash="31">
                        Vous avez désormais tout le temps de rechercher un hôtel splendide et incroyable pour vos
                        weekend et
                        vacances. Avec HoTeru, réservez votre chambre sans précipitation ! Alors, inscrivez-vous
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a href="./html/connexion.php" class="me-md-2 fw-bold" style="background-color: #550032; text-decoration: none; padding: 10px 40px; border-radius: 10px; color: rgb(255, 255, 255);">Je
                            m'inscris</a>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3" src="./im/receptionniste.jpg" alt="" width="720">
                </div>
            </div>
        </div>


        <!-- CODE HERO POUR HOTERU PRO -->
        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold text-body-emphasis" _msttexthash="2142296" _msthash="11">Vous êtes un hôtel ?
            </h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4" _msttexthash="44418985" _msthash="12">
                    Avec HoTeru Pro, inscrivez votre établissement et augmentez votre notoriété et votre clientèle.
                    <br>Tous
                    cela en quelques clics !
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <a href="./html/hoterupro.php" class="me-md-2 fw-bold" style="background-color: #550032;
                       text-decoration: none;
                       padding: 10px 40px;
                       border-radius: 10px;
                       color: rgb(255, 255, 255);">Voir plus</a>
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5">
                    <img src="./im/avz.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Exemple d’image" width="700" height="500" loading="lazy" _mstalt="201149" _msthash="15">
                </div>
            </div>
        </div>

        <div class="container-fluid foot">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3">
                    <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                        <img class="bi me-2" src="./im/favicon.png" width="50" height="50">
                    </a>
                    <p class="text-body-secondary" _msttexthash="39988" _msthash="20">© 2023</p>
                </div>

                <!-- <div class="col mb-3">
        
          </div> -->

                <div class="col mb-3">
                    <style>
                        .foot a {
                            color: #550032;
                        }

                        .foot a:hover {
                            color: #ff9677;
                        }
                    </style>
                    <h5 _msttexthash="95641" _msthash="21">Liens utiles</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="../index.php" class="nav-link p-0 text-body-secondary">Acceuil</a></li>
                        <li class="nav-item mb-2"><a href="./hoterupro.php" class="nav-link p-0 text-body-secondary">HoTeru Pro</a></li>
                        <li class="nav-item mb-2"><a href="./carte.php" class="nav-link p-0 text-body-secondary">Carte</a></li>
                        <li class="nav-item mb-2"><a href="./contact.php" class="nav-link p-0 text-body-secondary">Contacts</a></li>
                        <li class="nav-item mb-2"><a href="./about.php" class="nav-link p-0 text-body-secondary">A propos</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 _msttexthash="95641" _msthash="27">Réseaux</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" _msttexthash="111306" _msthash="28"><i class="fa-brands fa-facebook-f" style="margin-right: 10px;"></i>hoteru_pageOfficielle</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" _msttexthash="326092" _msthash="29"><i class="fa-brands fa-square-instagram" style="margin-right: 10px;"></i>HoTeru</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" _msttexthash="95446" _msthash="30"><i class="fa-brands fa-twitter" style="margin-right: 10px;"></i>@HoTeru_hote</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" _msttexthash="97383" _msthash="32"><i class="fa-solid fa-envelope" style="margin-right: 10px;"></i>hoteru@gmail.com</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 _msttexthash="95641" _msthash="33">Autres</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" _msttexthash="111306" _msthash="34">Termes de confidentialité</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" _msttexthash="326092" _msthash="35">Conditions d'utilisations</a></li>
                    </ul>
                </div>
            </footer>
        </div>

        <footer class="footer mt-auto py-3 bg-body-tertiary">
            <div class="container">
                <span class="text-body-secondary" _msttexthash="1290094" _msthash="16">Dans certains hôtels, les
                    annulations
                    doivent obligatoirement être éffectuées au moins 24 heures avant l’arrivée. Plus de détails sur le
                    site.
                </span>
            </div>
        </footer>

        <script src="js/jquery.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script src="js/hoteru.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
