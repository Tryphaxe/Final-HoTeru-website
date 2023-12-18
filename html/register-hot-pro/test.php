<?php include "../../hoteru/includes/functions.php"; ?>
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/register-hot-pro.css">

<!-- ===========IMPORT BOOTSTRAP STYLE CSS============ -->
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css.map">
<div class="row ">
    <input type="checkbox" checked="" class="form-control" name="services[]" value="" style="border: 2px solid red;background: red;" />
    <?php foreach (getAll("services") as $service) { ?>
        <div class="col-md-4 form-check">
            <label for="cmdp" class="form-label"><?= $service['nom'] ?></label>
            <input type="checkbox" checked="" class="form-check-input" name="services[]" value="<?= $service['id'] ?>" style="border: 2px solid red;background: red;" />
        </div> 
    <?php } ?>
</div>