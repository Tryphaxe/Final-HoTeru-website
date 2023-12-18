<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styleadmin.css">
    <link rel="icon" href="../im/favicon.png">
</head>
<body>
    
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

        <div class="global-container">

            
            <div class="nav-bar">

                
                <div class="block-logo">
                    <img src="../im/hoteruicon.png" alt="">
                    <label for="">HoTeru</label>
                </div>

                
                <div class="links">
                    
                    <button   class="link page-active">
                        <img src="../im/1x/grid-interface.png" alt="">
                        <span for="">Acceuil</span>
                    </button>

                    <button   class="link">
                        <img src="../im/1x/profile0.png" alt="">
                        <span for="">Utilisateur</span>
                    </button>
                    
                    <button   class="link">
                        <img src="../im/1x/home-3.png" alt="">
                        <span for="">Hôtels</span>
                    </button>

                    <button   class="link">
                        <img src="../im/1x/file-shared.png" alt="">
                        <span for="">Administrateurs</span>
                    </button>

                    <button   class="link">
                        <img src="../im/1x/attach_money.png" alt="">
                        <span for="">Comptabilité</span>
                    </button>

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

            
            <div class="block-card">
                <div class="block-card-top">
    
                    <span id="welcome">Welcome admin Odhey !</span>
                    <div class="part">
                        <a href="" class="letter"><img src="../im/1x/lettera.png" style="width: 24px;"></a>
                        <a href="" class="alarm"><img src="../im/1x/alarm.png" style="width: 24px;"></a>
                        <a href="" class="picture"><img src="../im/odhey.png" style="width: 32px; border-radius: 500px;"></a>
                        <label style="font-size: 14px; font-weight: 500;"> <b>DJUE</b> Othniel Miennassé Viéman</label>

                    </div>
                </div>
                <div class="cards">
                    <div class="card active-page-content" id="home"> Pour l'acceuil </div>
                    
                    <div class="card" id="user"> Pour les utilisateurs </div>
                    
                    <div class="card" id="hot"> Pour les hotels </div>
                    
                    <div class="card" id="ad"> Pour les Administrateurs </div>

                    <div class="card" id="gain"> Pour les Comptabilité </div>

                    <div class="card" id="set"> Pour les paramètres </div>
                </div>
            </div>
        </div>

        <script src="../js/scriptonglet.js"></script>
        <script src="../js/deconnect-admin-hotel.js"></script>
</body>
</html>