<div class="containerA">
        <!-- liste des referentiels -->
        <div class="containe1">
            <span>Référentiels</span>
            <span>Referentiels. Liste</span>
        </div>
    <div class="list-refer">
        
        <div class="list-referantiel">
         <?php foreach ($referentiels as $referentiel) : ?>
            <div class="card form">
              <div class="top">...</div>
              <!-- <div> -->
              <img src="../app/views/assets/img/classe.jpg" alt="" />
              <p><?= $referentiel['libelle'] ?></p>
              <h4><?= $referentiel['status'] ?></h4>
              <!-- </div> -->
            </div>
            <?php endforeach; ?>
        
        </div>
        
        <div class="form card1 top bottom">
          <div class="top">
            <h3>Nouveau referentiel</h3>
          </div>
          <div class="bottom">
            <label for="libelle">Libelle</label>
            <input
              type="text"
              name="libelle"
              id=""
              placeholder="Entrez le libelle"/>
            <label for="Description">Description</label>
            <input type="textarea"name="Description"id="" placeholder="Entrez la Description"/>
            <button>Enregistrer</button>
          </div>
        </div>
       
      </div>
      <!-- end liste des referentiels -->
  
    </div>