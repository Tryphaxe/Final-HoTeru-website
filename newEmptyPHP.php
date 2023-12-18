<?php
if (isset($_POST['btnRechercher'])) {
    $zone = $_POST['zone'];
    $quartier = $_POST['quartier'];
    $services = $_POST['services'];
    $name = $_POST['name'];
    ?>


    <?php
    $liste_hot = searchByItem($zone, $quartier, $services);
    if (!empty($name)) {
        $liste_hot = searchHotelByName($name);
    }
    foreach ($liste_hot as $hotel) {
        $imgHotel = getOneByItem("hotel_img", "hotel_id", $hotel['id']);
        //                        var_dump($imgHotel); die();
        ?>
        <div class="slide">
            <div class="block-bg" style="background: url(hoteru/hotel_img/<?= empty($imgHotel['path']) ? 'defaut.png' : $imgHotel['path'] ?>) center/cover !important;padding: 20px 10px;border-radius: 10px;">
            </div>
            <div class="block-info">
                <div class="block-nom">
                    <label><?= $hotel['name'] ?></label>
                </div>
                <div class="block-des">
                    <label><?= $hotel['description'] ?>
                    </label>
                </div>
                <div class="block-serv">
                    <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                    <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                    <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                </div>
                <div class="block-plus">
                    <label><?= number_format($hotel['min_price']) ?> Fcfa / Nuit</label>
                    <a href="./html/description_hotel.php?hotel_id=<?= $hotel['id'] ?>&hot=<?= md5('hoteruPro') ?>&ch=<?= md5('hoteruPro') ?>" class="plus">Voir +</a>
                </div>
            </div>
        </div>
    <?php } ?>


<?php
} else {
    foreach (getAll("hotel") as $hotel) {
        $imgHotel = getOneByItem("hotel_img", "hotel_id", $hotel['id']);
        //                        var_dump($imgHotel); die();
        ?>
        <div class="slide">
            <div class="block-bg" style="background: url(hoteru/hotel_img/<?= empty($imgHotel['path']) ? 'defaut.png' : $imgHotel['path'] ?>) center/cover !important;padding: 20px 10px;border-radius: 10px;">
            </div>
            <div class="block-info">
                <div class="block-nom">
                    <label><?= $hotel['name'] ?></label>
                </div>
                <div class="block-des">
                    <label><?= $hotel['description'] ?>
                    </label>
                </div>
                <div class="block-serv">
                    <i class="gp fa-solid fa-person-swimming fa-lg fa-fade"></i>
                    <i class="gp fa-solid fa-utensils fa-lg fa-fade"></i>
                    <i class="gp fa-solid fa-fan fa-lg fa-fade"></i>
                </div>
                <div class="block-plus">
                    <label><?= number_format($hotel['min_price']) ?> Fcfa / Nuit</label>
                    <a href="./html/description_hotel.php?hotel_id=<?= $hotel['id'] ?>&hot=<?= md5('hoteruPro') ?>&ch=<?= md5('hoteruPro') ?>" class="plus">Voir +</a>
                </div>
            </div>
        </div>
    <?php }
}
?>
