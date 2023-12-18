<div class="second-page" style="display: none">
    <div class="row g-3">
        <div class="col-12">
            <label for="ville" class="form-label">Ville</label>
            <div class="input-group has-validation">
                <span class="input-group-text"><i class="fa-solid fa-map"></i></span>
                <select type="text" class="form-control" name="ville" id="ville" placeholder="Nom utilisateur" required=""
                       _mstplaceholder="113997">
                    <option value="">Veuillez choisir une ville</option>
                    <?php foreach (getAll("ville") as $row) { ?>
                    <option value="<?=$row['id']?>"><?=$row['nom_ville']?></option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    Nom utilisateur requis
                </div>
            </div>
        </div> 
        <div class="col-12">
            <label for="quartier" class="form-label">Quartier</label>
            <div class="input-group has-validation">
                <span class="input-group-text"><i class="fa-solid fa-location"></i></span>
                <select type="text" class="form-control" id="quartier_id" required=""
                        _mstplaceholder="113997" name="quartier_id">
                    <option value="">Veuillez choisir un quartier</option>
                </select>
                   
            </div>
        </div>
        <div class="col-12">
            <label for="localisation" class="form-label">Localisation</label>
            <div class="input-group has-validation">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                <input type="text" class="form-control" id="location" placeholder="Donnez une description de la localistion" required=""
                       _mstplaceholder="113997" name="localisation">
            </div>
        </div>
        <div class="col-12">
            <label for="service" class="form-label">Services</label>
            <hr>
            <!--<div class="input-group has-validation">-->
                <div class="row ">
                    <?php foreach (getAll("services") as $service) { ?>
                    <div class="col-md-4 form-check">
                         <input type="checkbox" class="form-check-input" name="services[]" value="<?=$service['id']?>" style="border: 2px solid red;" />
                         <label for="cmdp" class="form-label"><?=$service['nom']?></label>
                    </div> 
                    <?php } ?>
                </div>
            <!--</div>-->
        </div>

    </div>
    <hr class="my-4">
    
    <button class="w-100 btn btn-lg btnAddHotel" style="background-color: #550032; color: white;" >Valider</button>
     <a class="w-100 btn btn-lg mt-1 retour-1" style="background-color: #550032; color: white;">Retour</a>
   
</div>
