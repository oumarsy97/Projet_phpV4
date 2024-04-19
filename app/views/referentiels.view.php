<div class="containerA">
        <!-- liste des referentiels -->
        <div class="containe1">
            <span>Référentiels</span>
            <span>Referentiels. Liste</span>
        </div>
        <span class="span" style=" margin-left: 10px;font-size: 20px;font-weight: bold;">
            Promotion: <span style="color: #009186;"><?= promotionActive()['libelle'] ?></span>
        </span>
    <div class="list-refer">
        
        <div class="list-referantiel">
         <?php foreach ($referentiels as $referentiel) : ?>
            <div class="card form">
              <div class="top">...</div>
              <!-- <div> -->
              <?php 
              $image_path = imgs.$referentiel['image_path'];
              ?>
               <img src="<?= $image_path ?>" alt="" style="width: 100%;height: 100%;" /> 
              <p style="font-weight: bold;font-size: 16px;"><?= $referentiel['libelle'] ?></p>
              <button style="color: <?= $referentiel['status'] == 'active' ? 'green' : 'red' ?>;width: 80%;height: 70px;font-weight: bold;font-size: 25px;border-radius: 10px;border: none;background-color: #F5F5F50" type="submit"  onclick="this.form.submit()" ><?= $referentiel['status'] ?></button>
              <!-- </div> -->
              <input type="hidden" name="page" id="" value="utilisateurs" >
            </div>
            <?php endforeach; ?>
        
        </div>
        
        <div class="form card1 top bottom">
          <div class="top">
            <h3>Nouveau referentiel</h3>
          </div>
          
          <form  method="post" class="bottom" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <input type="hidden" name="page" id="" value="referentiels"/>
              <input type="hidden" name="newreferentiel" id="" value="newreferentiel"/>
              <label for="libelle">Libelle</label>
              <input type="text" name="libelle" id="" placeholder="Entrez le libelle" value="<?php echo $libelle; ?>"/>
              <span class="error lib" style="color:red;"> <?php echo $nameErrLibelle;?></span>
              <label for="Description">Description</label>
              <input type="textarea" name="description" id="" placeholder="Entrez la Description" value="<?php echo $description; ?>"/>
              <span class="error desc" style="color:red;"> <?php echo $nameErrDes;?></span>
              <div style="display: flex;align-items: center;justify-content: space-between;">
                <input type="file" name="image" id="image" onchange="previewImage()" />
                
                <img id="preview" alt="Image" style="width: 80px;height: 8 0px;">
                
         </div>
        <script>
		function toggle() {
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "toggle.php", true);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send("toggle=" + document.getElementById("toggle_checkbox").checked);
		}

    function previewImage() {
    var preview = document.getElementById('preview');
    var file = document.getElementById('image').files[0];
    var reader = new FileReader();

    reader.onloadend = function() {
      preview.src = reader.result;
    }

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
  }
	</script>
         
         <div class="toggle-switch">
        <input type="checkbox" id="toggle" name="toggle" onchange="toggle()">
        <label for="toggle"></label>
    </div>
              <button type="submit">Enregistrer</button>
          </form>
          
        </div>
       
      </div>
      <!-- end liste des referentiels -->
  
    </div>