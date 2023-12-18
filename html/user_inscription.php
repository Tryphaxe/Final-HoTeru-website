<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscirvez-vous !</title>
    <link rel="stylesheet" href="../css/user_inscription.css">
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
        <form action="" id="frmAddUser" method="POST">
            <label for="">Inscription</label>
            <div class="box">
                <div class="box-content">
                    <div class="btn">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Nom d'utilisateur" name="username">
                    </div>
                    <div class="btn">
                        <i class="fa-solid fa-phone"></i>
                        <input type="text" placeholder="Numéro de téléphone" maxlength="10" name="number" id="">
                    </div>
                    <div class="btn">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" id="">
                    </div>
                    <div class="btn">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Mot de passe" maxlength="10" name="password" id="password">
                    </div>
                    <div class="btn">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Confirmer mot de passe" maxlength="10" name="password_conf" id="password_conf">
                    </div>
                </div>
            </div>
            <input type="submit" name="valider" value="Valider">
            <span style="margin-bottom: 10px; margin-top: 10px;">---------- OU ----------</span>
            <div class="btn-connect">
                <a href="" class="btn-c"> <img src="../im/1x/google.png" style="width: 24px; margin-right: 10px;" alt=""> Connexion avec Google</a>
                <a href="" class="btn-c"> <img src="../im/1x/facebook.png" style="width: 24px; margin-right: 10px;" alt=""> Connexion avec facebook</a>
            </div>
                <hr>
                <div class="inscription">
                    <label class="forgot">Vous avez déjà un compte ?</label>
                    <a href="./connexion.php" class="ins">S'identifier</a>
                </div>
        </form>
    </div>
    
   <?php include 'footer.php'; ?>
</body>
</html>