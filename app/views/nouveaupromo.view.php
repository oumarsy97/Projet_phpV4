
<div class="container">
        <div class="head"></div>
        <!-- formulaire pour creer une promo -->
        <form class="form-promo" action="" method="post">
          <div class="navigation">
            <div class="circle">1</div>
            <hr />
            <div
              class="circle"
              style="background-color: #f5f5f5; color: #018f88"
            >
              2
            </div>
          </div>

          <div class="container">
            <p>Promotion</p>
            <div class="input">
              <label for="libelle">libelle</label>
              <input type="text" placeholder="entrez le libelle" />
            </div>
            <div class="cont2 flex">
              <div class="input">
                <label for="Date-debut">Date de debut</label>
                <input type="date" />
              </div>
              <div class="input">
                <label for="Date-debut">Date de fin</label>
                <input type="date" />
              </div>
            </div>
            <div class="btn-grp">
             <form action="" method="post">
              <input type="hidden" value="ajouterreferentiel"  name="direction"/>
                <input type="hidden" value="ajouterreferentielle"  name="page"/>
                <button type="submit">Ajouter referentielle</button>
              </form>
              <input type="hidden" name="page" value="promotion">
              <button style="background-color: #018f88;font-size: 18px;padding:  20px" type="submit" >Creer promotion</button>
            </div>
            <p>Referentielle</p>
          </div>
        </form>

      </div>