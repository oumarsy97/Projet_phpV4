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
              <p style="font-weight: bold;font-size: 16px;"><?= $referentiel['libelle'] ?></p>
              <h2 style="color: <?= $referentiel['status'] == 'active' ? 'green' : 'red' ?>;"   ><?= $referentiel['status'] ?></h2>
              <!-- </div> -->
            </div>
            <?php endforeach; ?>
        
        </div>
        
        <div class="form card1 top bottom">
          <div class="top">
            <h3>Nouveau referentiel</h3>
          </div>
          
            <form action="" method="post" class="bottom">
              <input type="hidden" name="page" id="" value="referentiels"/>
            <input type="hidden" name="newreferentiel" id="" value="newreferentiel"/>
            <label for="libelle">Libelle</label>
            <input type="text" name="libelle" id="" placeholder="Entrez le libelle"/>
             <label for="Description">Description</label>
            <input type="textarea"name="Description"id="" placeholder="Entrez la Description"/>
            <button type="submit">Enregistrer</button>
            </form>
          
        </div>
       
      </div>
      <!-- end liste des referentiels -->
  
    </div>