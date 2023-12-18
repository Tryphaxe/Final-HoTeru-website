<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur la page d'administrateur !</title>
    <link rel="stylesheet" href="../css/styleadmin-hotel.css">
    <link rel="icon" href="../im/favicon.png">
</head>
<body>

    <!-- -----------------------------------fenêtre de déconnexion------------------------->

    <div class="modal-container">

        <div class="overlay modal-trigger"></div>
       
            <div class="modal">
                <label for="" id="title">Déconnexion</label>
                <label for="">
                    Voulez-vous vraiment vous déconnecter ?
                </label>
                <form method="" action="" class="btn-container">
                    <input type="submit" value="Oui" class="">
                    <input type="reset" value="Non" class="main-close modal-trigger">
                </form>
            </div>
  
      </div>

    <!-- ------------------------------------------------------------------------------------------- -->

    <!-- Pour tout le cadre -->
    <div class="global-container">

        <!-- Pour la nav bar -->
        <div class="nav-bar">

            <!-- Pour le logo -->
            <div class="block-logo">
                <img src="../im/hoteruicon.png" alt="">
                <label for="">HoTeru</label>
            </div>

            <!-- Pour les boutons ou liens -->
            <div class="links">
                <!-- ACCEUIL -->
                <button   class="link page-active">
                    <img src="../im/1x/grid-interface.png" alt="">
                    <span for="">Acceuil</span>
                </button>

                <!-- HOTEL -->
                <button   class="link">
                    <img src="../im/1x/home-3.png" alt="">
                    <span for="">Mon hôtel</span>
                </button>
                
                <!-- CHAMBRES -->
                <button   class="link">
                    <img src="../im/1x/king_bed.png" alt="">
                    <span for="">Chambres</span>
                </button>

                <!-- RESERVATIONS -->
                <button   class="link">
                    <img src="../im/1x/check-all.png" alt="">
                    <span for="">Réservations</span>
                </button>

                <!-- PARAMETRES -->
                <button   class="link">
                    <img src="../im/1x/settings.png" alt="">
                    <span for="">Paramètres</span>
                </button>
            </div>
            
            <button type="button" class="connect modal-trigger">
                <img src="../im/1x/logout.png">
                <span>Déconnexion </span>
            </button>

        </div>

        <!-- Pour le conteneur -->
        <div class="block-card">
            <div class="block-card-top">

                <span id="welcome">Welcome admin Azalaï !</span>

                <div class="input-control">
                    <img src="../im/1x/search.png" alt="">
                    <input type="text" placeholder="Rechercher...">
                </div>

                <div class="liens">
                    <a href="">
                        <img src="../im/1x/lettera.png">
                    </a>
                    <a href="">
                        <img src="../im/1x/alarm.png">
                    </a>
                </div>

            </div>
            
            <div class="cards">
                <div class="card active-page-content">
                    
                </div>
                <div class="card">

                </div>
                <div class="card">

                </div>
                <div class="card">

                </div>
                <div class="card">
                    
                </div>
            </div>
        </div>
    </div>

    <script src="../js/scriptonglet.js"></script>
    <script src="../js/deconnect-admin-hotel.js"></script>
    
</body>
</html>