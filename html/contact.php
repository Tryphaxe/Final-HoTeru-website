<?php include "../hoteru/includes/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HoTeru | Contactez nous !</title>

    <!-- ===========IMPORT STYLE CSS============ -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cont-about.css">

    <!-- ===========IMPORT BOOTSTRAP STYLE CSS============ -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css.map">

    <!-- ===========IMPORT FONT AWESOME ICON CDN=============== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- ===========IMPORT FAVICON============ -->
    <link rel="shortcut icon" href="../im/favicon.png" type="image/x-icon">
</head>

<body>

    <!-- ===============CODE POUR LE HEADER================ -->
    <nav style="margin-bottom: 20px;">

        <a href="../index.php" class="nav-icon" aria-label="homepage" aria-current="page">
            <img src="../im/hoteruicon.png" alt="HoTeru icon" />
            <span>HoTeru</span>
        </a>

        <div class="main-navlinks">
            <button type="button" class="hamburger" aria-label="Toggle Navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navlinks">
                <a href="../index.php" class="nav-link">Acceuil</a>
                <a href="./hoterupro.php" class="nav-link">HoTeru Pro</a>
                <a href="./carte.php" class="nav-link">Carte</a>
                <a href="./contact.php" class="nav-link" arial-current="page" style="color: #ff9677;">Contacts</a>
                <a href="./about.php" class="nav-link">A propos</a>
            </div>
        </div>

        <div class="nav-authentication">
            <a href="#" class="user-toggler" aria-label="Sign in page">
                <i class="fa-solid fa-user"></i>
            </a>
            <div class="">
                <?php if (isset($_SESSION['hoteruUser'])) { ?>
                    <div class="dropdown text-end">
                        <a href="#" style="border:none;" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="Le" width="32" height="32" class="rounded-circle" _mstalt="33306" _msthash="42">
                            <span><?= @$_SESSION['hoteruUser'] ?></span>
                        </a>
                        <ul class="dropdown-menu text-small" style="" _mstvisible="0">
                            <li _mstvisible="1"><a class="dropdown-item" href="#" _msttexthash="276107" _msthash="43" _mstvisible="2">Hôtels déjà visités</a></li>
                            <li _mstvisible="1"><a class="dropdown-item" href="#" _msttexthash="179062" _msthash="44" _mstvisible="2">Favoris</a></li>
                            <li _mstvisible="1"><a class="dropdown-item" href="#" _msttexthash="77246" _msthash="45" _mstvisible="2">Aide</a></li>
                            <li _mstvisible="1"><hr class="dropdown-divider" _mstvisible="2"></li>
                            <li _mstvisible="1"><a class="dropdown-item" href="html/deconnexion.php" _msttexthash="247845" _msthash="46" _mstvisible="2">Se déconnecter</a></li>
                        </ul>
                    </div>
                <?php } else { ?>
                    <a href="./connexion.php" class="connect button1 sign-btns">
                        <i class="fa-solid fa-user" style="margin-right: 8px;"></i>Se connecter
                    </a>
                    <a href="./user_inscription.php" class="connect button2 sign-btns un">
                        <i class="fa-solid fa-user-plus" style="margin-right: 8px;"></i>S'inscrire
                    </a>
                <?php } ?>

            </div>
        </div>
    </nav>

    <script src="../js/scriptham.js"></script>

    <!-- CODE POUR LA DIV DES EXPLICATIONS SUR HOTERU PRO -->
    <div class="container">

        <div class="d-flex flex-column justify-content-center align-items-center">
            <div>
                <h3 style="font-size: 18px; background-color: #EDE5ED; width: 250px; padding: 20px 20px; border-radius: 10px;"
                    _msttexthash="208169" _msthash="19"> <i class="fa-brands fa-facebook-f"
                        style="margin-right: 15px; color: #550032;"></i> hoteru_Officielle</h3>
            </div>
            <div>
                <h3 style="font-size: 18px; background-color: #EDE5ED; width: 250px; padding: 20px 20px; border-radius: 10px;"
                    _msttexthash="208169" _msthash="19"> <i class="fa-brands fa-square-instagram"
                        style="margin-right: 15px; color: #550032;"></i> HoTeru</h3>
            </div>
            <div>
                <h3 style="font-size: 18px; background-color: #EDE5ED; width: 250px; padding: 20px 20px; border-radius: 10px;"
                    _msttexthash="208169" _msthash="19"> <i class="fa-brands fa-twitter"
                        style="margin-right: 15px; color: #550032;"></i> @HoTeru_hote</h3>
            </div>
            <div>
                <h3 style="font-size: 18px; background-color: #EDE5ED; width: 250px; padding: 20px 20px; border-radius: 10px;"
                    _msttexthash="208169" _msthash="19"> <i class="fa-solid fa-envelope"
                        style="margin-right: 15px; color: #550032;"></i> hoteru@gmail.com</h3>
            </div>

        </div>

    </div>
    
    <!-- SCRIPT JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>