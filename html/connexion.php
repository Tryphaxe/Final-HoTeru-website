<?php
session_start();
if (isset($_SESSION['hoteruUser'])) {
    header('location:../index.php');  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connectez-vous !</title>
    <link rel="stylesheet" href="../css/connexion.css">
    <link rel="icon" href="../im/favicon.png">

    <!-- ===============IMPORT FONT AWESOME ICON CDN=============== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <header>
        <a href="../index.php" class="btn-return">
            <img src="../im/1x/chevron_left.png" alt="">
        </a>
        <div class="logo">
            <img src="../im/hoteruicon2.png" alt="">
            <label for="">HoTeru</label>
        </div>
    </header>
    <div class="body">
        <section class="box-content">
            <form action="" class="box" id="frmConnectUser" method="POST">
                <label for="">Se connecter</label>
    
                <div class="btn">
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" placeholder="Nom d'utilisateur " maxlength="10" name="username">
                </div>
                <div class="btn">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Mot de passe" maxlength="10" name="password" id="">
                </div>
    
                <input type="submit" value="Connexion">
    
                <span style="margin-bottom: 10px;">---------- OU ----------</span>
                <div class="btn-connect">
                    <a href="" class="btn-c" style="margin-bottom: 10px;"> <img src="../im/1x/google.png"
                            style="width: 24px; margin-right: 10px;" alt=""> Connexion avec Google</a>
                    <a href="" class="btn-c"> <img src="../im/1x/facebook.png" style="width: 24px; margin-right: 10px;"
                            alt=""> Connexion avec facebook</a>
                </div>
                <hr>
                <div class="inscription">
                    <a href="" class="forgot">Mot de passe oublié ?</a>
                    <a href="./user_inscription.php" class="ins">S'inscrire</a>
                </div>
            </form>
        </section>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>