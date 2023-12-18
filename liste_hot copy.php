<?php
if (isset($_POST['btnRechercher'])) {
    $zone = $_POST['zone'];
    $quartier = $_POST['quartier_id'];
    $services = $_POST['services'];
    $name = $_POST['name'];
    $liste_hot = (!empty($name)) ? searchHotelByName($name, $zone) : searchByItem($zone, $quartier, $services);
    foreach ($liste_hot as $hotel) {
       $imgHotel = getOneByItem("hotel_img", "hotel_id", $hotel['id']);?>

<!-- --------------------- -->
<div class="col">
    <div class="card rounded-4">
        <img src="background: url(hoteru/hotel_img/<?= empty($imgHotel['path']) ? 'defaut.png' : $imgHotel['path'] ?>)" alt="L'image de l'hôtel" class="card-img-top rounded-4 border-2">
        <div class="card-body">
            <h5 class="card-tittle"><?= $hotel['name'] ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"> <i class="fa-solid fa-location-dot"  style="color: gray;"></i> Abidjan, Cocody</h6>
            <span class="card-text"><?= $hotel['description'] ?></span>
            <div class="d-flex align-items-center justify-content-between py-2">
                <label class="fs-7 fw-bold"><i class="fa-solid fa-coins" style="color: gray;"></i><?= number_format($hotel['min_price']) ?> Fcfa / Nuit</label>
                <a href="./html/description_hotel.php?hotel_id=<?= $hotel['id'] ?>&hot=<?= md5('hoteruPro') ?>&ch=<?= md5('hoteruPro') ?>" class="btn" style="background-color: #550032; color: white;">Voir +</a>
            </div>
        </div>
    </div>
</div>
<!-- --------------------- -->
     
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
<?php } }else {
    $liste_hot = getAll("hotel");
    
     foreach ($liste_hot as $hotel) {
       $imgHotel = getOneByItem("hotel_img", "hotel_id", $hotel['id']);?>
     
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
<?php }}
?>

