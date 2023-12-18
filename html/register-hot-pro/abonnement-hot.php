<?php include "../../hoteru/includes/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HoTeru | Informations HoTeru Pro</title>

    <!-- ===========IMPORT STYLE CSS============ -->
    <link rel="stylesheet" href="../../css/style.css">

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
                <a href="../index.php" class="nav-link">Contacts</a>
                <a href="../index.php" class="nav-link">A propos</a>
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
        <h2 class="pb-2 border-bottom" _msttexthash="342264" _msthash="18">Création de compte HoTeru Pro - Deuxième
            étape</h2>
        <h5 style="font-size: 24px; color: rgb(0, 0, 0);" _msthash="19">
           Choisissez votre abonnement...
        </h5>
        <main style="margin-top: 25px;">
          <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal" _msttexthash="58565" _msthash="15">Free</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title" _msttexthash="79625" _msthash="16">0Fcfa <small class="text-body-secondary fw-light" _istranslated="1">/ mois</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li _msttexthash="459875" _msthash="17">10 utilisateurs inclus</li>
                    <li _msttexthash="222157" _msthash="18">2 Go de stockage</li>
                    <li _msttexthash="398437" _msthash="19">Assistance par e-mail</li>
                    <li _msttexthash="2639559" _msthash="20">Accès au centre d’aide</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg" style="border: 2px solid #cecece; color: #550032;" _msttexthash="709397" _msthash="21">Inscrivez-vous gratuitement</button>
                </div>
              </div>
            </div>
            
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm" style="border: 1px solid #550032;">
                <div class="card-header py-3" style="background-color: #550032; color: white;">
                  <h4 class="my-0 fw-normal" _msttexthash="159835" _msthash="29">Premium</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title" _msttexthash="92833" _msthash="30">35 000Fcfa <small class="text-body-secondary fw-light" _istranslated="1">/ mois</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li _msttexthash="460057" _msthash="31">30 utilisateurs inclus</li>
                    <li _msttexthash="243594" _msthash="32">15 Go de stockage</li>
                    <li _msttexthash="1094938" _msthash="33">Assistance par téléphone et par e-mail</li>
                    <li _msttexthash="2639559" _msthash="34">Accès au centre d’aide</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg" style="background-color: #550032; color: white;" _msttexthash="255125" _msthash="35">Contactez-nous</button>
                </div>
              </div>
            </div>
          </div>
      
          <h2 class="display-6 text-center mb-4" _msttexthash="322933" _msthash="36">Comparer les plans</h2>
      
          <div class="table-responsive">
            <table class="table text-center">
              <thead>
                <tr>
                  <th style="width: 34%;"></th>
                  <th style="width: 22%;" _msttexthash="58565" _msthash="37">Libre</th>
                  <th style="width: 22%;" _msttexthash="32123" _msthash="38">Pro</th>
                  <th style="width: 22%;" _msttexthash="159835" _msthash="39">Entreprise</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="text-start" _msttexthash="75413" _msthash="40">Public</th>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                </tr>
                <tr>
                  <th scope="row" class="text-start" _msttexthash="80080" _msthash="41">Privé</th>
                  <td></td>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                </tr>
              </tbody>
      
              <tbody>
                <tr>
                  <th scope="row" class="text-start" _msttexthash="238992" _msthash="42">Autorisations</th>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                </tr>
                <tr>
                  <th scope="row" class="text-start" _msttexthash="92794" _msthash="43">Partage</th>
                  <td></td>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                </tr>
                <tr>
                  <th scope="row" class="text-start" _msttexthash="358436" _msthash="44">Membres illimités</th>
                  <td></td>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                </tr>
                <tr>
                  <th scope="row" class="text-start" _msttexthash="609765" _msthash="45">Sécurité supplémentaire</th>
                  <td></td>
                  <td></td>
                  <td><i class="bi  fa-solid fa-check-double" width="24" height="24"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
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

</body>

</html>