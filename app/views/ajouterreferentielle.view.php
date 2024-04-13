<div class="referentiel-selection">
        <div class="top">
          <div>
            <div class="circle">1</div>
            <hr />
            <div
              class="circle"
              style="background-color: #f5f5f5; color: #018f88"
            >
              2
            </div>
          </div>
          <div>
            <p>Promotion</p>
            <p>Referentielle</p>
          </div>
        </div>
        <div class="container">
          <p>selectionner un ou plusieurs referentiel (s)</p>
          <?php foreach ($referentiels as $referentiel) : ?>
          <div class="checkbox1">
            <input type="checkbox" name="web" />
            <label><?= $referentiel['libelle'] ?></label>
          </div>
          <?php endforeach; ?>
          
          <div class="checkbox1">
            <form action="" method="post">
            <input type="hidden" name="page" value="nouveaupromo">
            <button type="submit"id="back" >back</button>
            </form>
            <button>creer</button>
          </div>
        </div>
      </div>