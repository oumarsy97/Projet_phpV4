
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
              <input type="text" placeholder="entrez le libelle" name ="libelle" value="<?php isset($_SESSION['libelle']) ? $_SESSION['libelle'] : '' ?>"/>
              <span class="error labelle" style="color:red;"> <?php echo $errlibelle;?></span>
            </div>
            <div class="cont2 flex">
            <span class="error date" style="color:red;"> <?php echo $errdate;?></span>
            
              <div class="input">
                <label for="Date-debut">Date de debut</label>
                <input type="date"  name="date1"/>

                <span class="error date1" style="color:red;"> <?php echo $errdate1;?></span>
              </div>
              <div class="input">
                <label for="Date-debut">Date de fin</label>
                <input type="date"  name="date2" />
                <span class="error date2" style="color:red;"> <?php echo $errdate2;?></span>
              </div>
            </div>
            <div class="btn-grp">
             <form action="" method="post">
                <input type="hidden" value="nouveaupromo"  name="page"/>
                <button type="submit" name="btnref" value="btnref">Ajouter referentielle</button>
              </form>
              <button style="background-color: #018f88;font-size: 18px;padding:  20px" type="submit" name="btnpro" value="btnpro" >Creer promotion</button>
            </div>
            <p>Referentielle</p>
          </div>
        </form>

      </div>