<?php include '../hoteru/includes/functions.php';
$hotel = getOneByItem("hotel", "id", $_GET['hotel_id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HoTeru | Description hôtel</title>
    <!-- ===========IMPORT STYLE CSS============ -->
    <link rel="stylesheet" href="../css/description_hotel.css">

    <!-- ===========IMPORT BOOTSTRAP STYLE CSS============ -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- ===============IMPORT FONT AWESOME ICON CDN=============== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- IMPORTATION GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400;0,500;1,400&family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- ===========IMPORT FAVICON============ -->
    <link rel="shortcut icon" href="../im/favicon.png" type="image/x-icon">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
</head>

<body>
    <header>
        <a href="../index.php" class="btn-return">
            <img src="../im/1x/chevron_left.png" alt="icones bouton retour à la page d'acceuil">
        </a>
        <div class="logo">
            <img src="../im/hoteruicon2.png" alt="Logo Hoteru">
            <label>HoTeru</label>
        </div>
    </header>

    <!-- CODE POUR LA SECTION DES BOX -->

    <div class="container mb-5">
        <div class="row">
            <div class="col">
                <div class="slider rounded-4 bg-body-tertiary gap-10" style="max-width: 600px; height: 400px;">
                    <?php foreach (getAllByItem("hotel_img", "hotel_id", $hotel['id']) as $hotel_img) {
                    ?>
                        <img src="../hoteru/hotel_img/<?= $hotel_img['path'] ?>" alt="Les images de l'hôtel <?= $hotel['name'] ?>" style="height: 400px; background-size: cover;" class="slide rounded-4">
                    <?php } ?>
                </div>
            </div>
            <div class="col">
                <div class="p-4 bg-body-tertiary rounded-4 d-flex flex-column gap-2"  style="font-family: 'Afacad', sans-serif; height: 100%;">
                    <span class="card-tittle text-lowercase fs-2" style="font-weight: 500;">
                        <?= $hotel['name'] ?>
                    </span>
                    <span class="text-body-tertiary fs-5 fw-light">
                        <i class="fa-solid fa-location-dot"></i>
                        <?php
                        $ville = getOneByItem("ville", "id", $hotel["ville"]);
                        $quartier = getOneByItem("quartier", "id", $hotel["quartier_id"]);
                        ?>
                        <?= $ville['nom_ville'] ?>, <?= $quartier['nom'] ?>
                    </span>
                    <div class="stars">
                        <i class="fa-solid fa-star" style="color: orange;"></i>
                        <i class="fa-solid fa-star" style="color: orange;"></i>
                        <i class="fa-solid fa-star" style="color: orange;"></i>
                        <i class="fa-solid fa-star" style="color: orange;"></i>
                    </div>
                    <label class="fs-5" style="color: green;">
                        8.0/10 Très bien
                    </label>
                    <label class="fs-5">
                        <?= $hotel['description'] ?>
                    </label>
                    <div class="services">
                        <label class="fw-light fs-3">Commodités</label>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2">
                            <div class="col">
                                <i class="fa-solid fa-person-swimming"></i>
                                <label for="">Piscine</label>
                            </div>
                            <div class="col">
                                <i class="fa-solid fa-wifi"></i>
                                <label for="">Wifi</label>
                            </div>
                            <div class="col">
                                <i class="fa-solid fa-fan"></i>
                                <label for="">Clim</label>
                            </div>
                            <div class="col">
                                <i class="fa-solid fa-utensils"></i>
                                <label for="">Dîner</label>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <label>Prix min : <span class="fs-4 fw-light"><?= number_format($hotel['min_price']) ?> Fcfa / Nuit</span></label>
                    </div>
                    <div class="container">
                        <div class="row fw-light">
                            <div class="col">
                                <a href="#" class="btn px-5 py-3 fs-5 text-white" style="background-color: #FF9677; width:100%;">Voir sur la carte</a>
                            </div>
                            <div class="col">
                                <label class="py-3 bg-dark-subtle rounded-2 fs-5 text-black" style="width:100%; text-align: center;">Contact : +225 <?= number_format($hotel['number']) ?></label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="../js/main2.js"></script>

    <!-- CODE POUR LE BLOC DES CHAMBRES -->

    <div class="container">
        <label class="fs-3" style="color: #ff9677; font-family: 'Afacad', sans-serif;">Toutes les chambres</label>
        <hr>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 ">
            <div class="col mb-5">
                <div class="block-room">
                    <div class="block-bg">
                        <!-- <label class="reduc">
                                -10%
                            </label> -->
                    </div>
                    <div class="block-info">
                        <div class="block-nom pt-3">
                            <label>Chambre Standard</label>
                        </div>
                        <div class="block-plus">
                            <label>50.000 Fcfa <span>/ Nuit</span></label>
                        </div>
                        <hr class="trait">
                        <div class="block-serv">
                            <div class="serv-containt">
                                <i class="fa-solid fa-person-swimming"></i>
                                <label for="">Piscine</label>
                            </div>
                            <div class="serv-containt">
                                <i class="fa-solid fa-wifi"></i>
                                <label for="">Wifi</label>
                            </div>
                            <div class="serv-containt">
                                <i class="fa-solid fa-fan"></i>
                                <label for="">Clim</label>
                            </div>
                            <div class="serv-containt">
                                <i class="fa-solid fa-utensils"></i>
                                <label for="">Dîner</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="block-room">
                    <div class="block-bg">
                        <!-- <label class="reduc">
                                -10%
                            </label> -->
                    </div>
                    <div class="block-info">
                        <div class="block-nom pt-3">
                            <label>Chambre Standard</label>
                        </div>
                        <div class="block-plus">
                            <label>50.000 Fcfa <span>/ Nuit</span></label>
                        </div>
                        <hr class="trait">
                        <div class="block-serv">
                            <div class="serv-containt">
                                <i class="fa-solid fa-person-swimming"></i>
                                <label for="">Piscine</label>
                            </div>
                            <div class="serv-containt">
                                <i class="fa-solid fa-wifi"></i>
                                <label for="">Wifi</label>
                            </div>
                            <div class="serv-containt">
                                <i class="fa-solid fa-fan"></i>
                                <label for="">Clim</label>
                            </div>
                            <div class="serv-containt">
                                <i class="fa-solid fa-utensils"></i>
                                <label for="">Dîner</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CODE HTML FOOTER -->
    <div class="container-fluid foot">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3">
                    <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                        <img class="bi me-2" src="../im/favicon.png" width="50" height="50">
                    </a>
                    <p class="text-body-secondary">© 2023</p>
                </div>
                <div class="col mb-3">
                    <style>
                        .foot a {
                            color: #550032;
                            font-family: 'Afacad', sans-serif;
                            font-size: 20px;
                        }

                        .foot a:hover {
                            color: #ff9677;
                        }
                    </style>
                    <h5>Liens utiles</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="../index.php" class="nav-link p-0">Acceuil</a></li>
                        <li class="nav-item mb-2"><a href="./hoterupro.php" class="nav-link p-0">HoTeru Pro</a></li>
                        <li class="nav-item mb-2"><a href="./carte.php" class="nav-link p-0">Carte</a></li>
                        <li class="nav-item mb-2"><a href="./contact.php" class="nav-link p-0">Contacts</a></li>
                        <li class="nav-item mb-2"><a href="./about.php" class="nav-link p-0">A propos</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 _msttexthash="95641" _msthash="27">Réseaux</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0"><i class="fa-brands fa-facebook-f" style="margin-right: 10px;"></i>hoteru_pageOfficielle</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0"><i class="fa-brands fa-square-instagram" style="margin-right: 10px;"></i>HoTeru</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0"><i class="fa-brands fa-twitter" style="margin-right: 10px;"></i>@HoTeru_hote</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0"><i class="fa-solid fa-envelope" style="margin-right: 10px;"></i>hoteru@gmail.com</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Autres</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Termes de confidentialité</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Conditions d'utilisations</a></li>
                    </ul>
                </div>
            </footer>
        </div>

        <footer class="footer mt-auto py-3 bg-body-tertiary">
            <div class="container">
                <span class="text-body-secondary">
                    Dans certains hôtels, les annulations doivent obligatoirement être éffectuées au moins 24 heures avant l’arrivée.
                    Plus de détails sur le site.
                </span>
            </div>
        </footer>
</body>

</html>