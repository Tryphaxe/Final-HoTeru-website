$(function () {
    function smartAlert(title, msg, icon, page) {
        swal({
            title: title, //warning
            text: msg,
            icon: icon,
            closeOnClickOutside: false,
            button: true,
        }).then(() => {
            if (icon != "success") {

            } else {
                if (page == "") {
                    history.go(0);
                } else {
                    window.location.href = page;
                }

            }
        });
    }
    function smartAlert2(title, msg, icon, page) {
        swal({
            title: title, //warning
            text: msg,
            icon: icon,
            closeOnClickOutside: false,
            button: true,
        }).then(() => {
            if (icon != "success") {

            } else {
                if (page == "") {

                } else {
                    window.location.href = page;
                }

            }
        });
    }
    //Bloc inscription user
    addUser();
    function addUser() {
        $('body').delegate('#frmAddUser', 'submit', function (e) {
            e.preventDefault();
            var formData = $(this).serializeArray();
            console.log(formData);
            //bloc ajax
            $.ajax({
                url: '../hoteru/api/user/add_user.php',
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                success: function (data) {
                    if (data.status == "success") {
                        smartAlert("Notification", data.msg, 'success', 'connexion.php');
                    } else {
                        smartAlert("Notification", data.msg, 'error', '');
                    }
                }
            });
        });
    }

    connectUser();
    function connectUser() {
        $('body').delegate('#frmConnectUser', 'submit', function (e) {
            e.preventDefault();
            var formData = $(this).serializeArray();
            console.log(formData);
            //bloc ajax
            $.ajax({
                url: '../hoteru/api/user/connect_user.php',
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                success: function (data) {
                    if (data.status == "success") {
                        smartAlert("Notification", data.msg, 'success', '../index.php');
                    } else {
                        smartAlert("Notification", data.msg, 'error', '');
                    }
                }
            });
        });
    }

    //Creation de compte hoteruPro

    //quartier par ville
    function getQuartierByVilleId(ville_id) {
        $.ajax({
            url: '../../hoteru/api/ville/action_ville.php',
            method: 'POST',
            data: {chooseVille: 1, ville_id: ville_id},
            success: function (data) {
                $('#quartier_id').html(data);
            }
        });
    }

    //choix de ville 
    chooseVille();
    function chooseVille() {
        $('body').delegate('#ville', 'change', function (e) {
            e.preventDefault();
            var ville_id = $(this).val();

            if (ville_id == "") {
                smartAlert("Notification", "Veuillez choisir une ville", "warning", "");
            } else {
                getQuartierByVilleId(ville_id);
            }
        });
    }

    //Sur index.php
     //quartier par ville
     function getQuartierByZoneId(zone_id) {
        $.ajax({
            url: 'hoteru/api/ville/action_ville.php',
            method: 'POST',
            data: {chooseVille: 1, ville_id: zone_id},
            success: function (data) {
                $('#quartier_id').html(data);
            }
        });
    }

    //choix de ville 
    chooseZone();
    function chooseZone() {
        $('body').delegate('#zone', 'change', function (e) {
            e.preventDefault();
            var zone_id = $(this).val();

            if (zone_id == "") {
                smartAlert("Notification", "Veuillez choisir une ville", "warning", "");
            } else {
                getQuartierByZoneId(zone_id);
            }
        });
    }

    blockDesSuivants();
    function blockDesSuivants() {
        $('body').delegate('.suivant-1', 'click', function (e) {
            e.preventDefault();
            var name = $('#name').val();
            var number = $('#number').val();
            var password = $('#password').val();
            var cmdp = $('#cmdp').val();
            if (name == "") {
                smartAlert("Notification", "Veuillez choisir le nom de l'hotel", "warning", "");
            } else if (number == "" || number.length != 10) {
                smartAlert("Notification", "Veuillez entrer un numero de 10 chiffres", "warning", "");
            } else if (password == "") {
                smartAlert("Notification", "Veuillez entrer un mot de passe", "warning", "");
            } else if (password != cmdp) {
                smartAlert("Notification", "Les mots de passe ne sont pas conforme", "warning", "");
            } else {
                $('.first-page').hide(1000);
                $('.second-page').show(1000);
            }

        });
        
        //Retour
        $('body').delegate('.retour-1', 'click', function (e) {
            e.preventDefault();
                $('.first-page').show(1000);
                $('.second-page').hide(1000);

        });
    }

    //Add hotel
    btnAddHotel();
    function btnAddHotel() {
        $('body').delegate('.btnAddHotel', 'click', function (e) {
            e.preventDefault();
            var formData = $('.frmAddHotel').serializeArray();
//            console.table(formData);
            $.ajax({
                url: '../../hoteru/api/hotel/add_hotel.php',
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                success: function (data) {
//                    console.table(data);
//                    $('.resuslt').html(data);
                   if (data.status == "success") {
                        smartAlert("Notification", data.msg, 'success', '');
                    } else {
                        smartAlert("Notification", data.msg, 'error', '');
                    }
                }
            });
        });
    }
});