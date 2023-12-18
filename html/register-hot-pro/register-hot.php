<?php include "../../hoteru/includes/functions.php";
// var_dump(searchByItem(16, 1));die();
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HoTeru | Informations HoTeru Pro</title>

        <!-- ===========IMPORT STYLE CSS============ -->
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/register-hot-pro.css">

        <!-- ===========IMPORT BOOTSTRAP STYLE CSS============ -->
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css.map">

        <!-- ===============IMPORT FONT AWESOME ICON CDN=============== -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

        <!-- ===========IMPORT FAVICON============ -->
        <link rel="shortcut icon" href="../../im/favicon.png" type="image/x-icon">
    </head>

    <body>

        <!-- ===============CODE POUR LE HEADER================ -->
        <nav style="margin-bottom: 20px;">

            <a href="../../index.php" class="nav-icon" aria-label="homepage" aria-current="page">
                <img src="../../im/hoteruicon.png" alt="HoTeru icon" />
                <span>HoTeru</span>
            </a>

            <div class="main-navlinks">
                <button type="button" class="hamburger" aria-label="Toggle Navigation" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="navlinks">
                    <a href="../../index.php" class="nav-link">Acceuil</a>
                    <a href="../hoterupro.php" arial-current="page" class="nav-link" style="color: #ff9677;">HoTeru Pro</a>
                    <a href="../carte.php" class="nav-link">Carte</a>
                    <a href="../contact.php" class="nav-link">Contacts</a>
                    <a href="../about.php" class="nav-link">A propos</a>
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
                        <a href="../connexion.php" class="connect button1 sign-btns">
                            <i class="fa-solid fa-user" style="margin-right: 8px;"></i>Se connecter
                        </a>
                        <a href="../user_inscription.php" class="connect button2 sign-btns un">
                            <i class="fa-solid fa-user-plus" style="margin-right: 8px;"></i>S'inscrire
                        </a>
                    <?php } ?>

                </div>
            </div>
        </nav>

        <script src="../../js/scriptham.js"></script>

        <!-- ============================== -->

        <div class="container px-4" id="hanging-icons">
            <h2 class="pb-2 border-bottom" _msttexthash="342264" _msthash="18">Création de compte HoTeru Pro - Prémière
                étape</h2>
            <h5 style="font-size: 14px; color: rgb(167, 167, 167);" _msthash="19">
                * Les données enrégistrées lors de cette inscription serviront d'identifiants <br>
                dans l'application de gestion de votre hôtel HoTeru Pro
            </h5>
            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <form action="" method="POST" class="needs-validation frmAddHotel">
                        <?php include './first_page.php'; ?>
                        <?php include './second_page.php'; ?>

                    </form>
                </div>
            </div>
            
            <div class="resuslt"></div>
        </div>

        <!-- CODE POUR LE FOOTER -->

        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="#" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                        <img class="bi me-2" src="../../im/favicon.png" width="50" height="50">
                    </a>
                    <span class="mb-3 mb-md-0 text-body-secondary" _msttexthash="327002" _msthash="13">© 2023 HoTeru,
                        Vcorp</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fa-brands fa-facebook"
                                                                                style="color: #ff9677;"></i></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fa-solid fa-envelope"
                                                                                style="color: #ff9677;"></i></a></li>
                </ul>
            </footer>
        </div>


        <!-- SCRIPT JS -->
        <script src="../../js/jquery.js"></script>
        <script src="../../js/sweetalert.min.js"></script>
        <script src="../../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../../js/hoteru.js"></script>

    </body>
</html>

<?php
if (isset($_POST["submit"])) {
    header('location:./abonnement-hot.php');
}
?>