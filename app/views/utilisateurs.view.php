  
     
     <div class="containe1">
        <span>Promotions</span>
        <span>Promos . Liste . Détails . Apprenants</span>
    </div>
    <div class="container2">
        <span class="span">
            Promotion: <span style="color: #009186;"><?= promotionActive()['libelle'] ?></span>
        </span>
        <span class="spanref">
            Référentiel: 
            <form action="" method="post">
            <input type="hidden" name="page" value="utilisateurs">
              <select name="id_referentiel" id="" >
                <?php foreach($referentiels as $referentiel): ?>
                  <option      <?= isset($_SESSION['id_referentiel']) && $_SESSION['id_referentiel'] == $referentiel['id'] ? 'selected' : '' ?> value="<?= $referentiel['id'] ?>" ><?= $referentiel['libelle'] ?></option>
                  <?php endforeach; ?>
                </select>
                <button type="submit">Rafraîchir</button>
              </form>
        </span>
    </div>
    <div class="container3">
        <div class="bare1"></div>
        <div class="containerIntern">
            <div class="divhaut">
                <span>Liste Des Apprenants <span style="color: #009186;">(<?= $nbr ?>)</span></span>
                <div class="btns">
                    <button class="btn new"><a href="#target" style="text-decoration: none;color: white;">+ Nouveau</a></button>
                    <button class="btn mass"><a href="#target3" style="text-decoration: none;color: white">Insertion en masse</a></button>
                    <button class="btn model">Fichier model</button>
                    <button class="btn exclu">Liste des Exclus</button>
                </div>
            </div>
           
            <div class="recherch">
                  <form action="" method="post">
                    <input type="hidden" name="page" value="utilisateurs">
                    <input type="text" placeholder="Filtrer" name="search" value="<?= isset($_SESSION['search']) ? $_SESSION['search'] :  '' ?>">
                    <i class="fa-solid fa-magnifying-glass fa-1x " ></i>
                  </form>
            </div>

        
        <div class="table1" >
                  <?php if(!empty($users)): ?>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Genre</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  
                  <?php foreach($users as $user): ?>
                  <tr>
                    <td style="display: flex;justify-content: center;align-items: center"><div class="img1"><img src="../app/views/assets/img/tete.png" alt=""></div></td>
                    <td><span style="color: #417b33;"><?= $user['name'] ?></span></td>
                    <td><span style="color: #417b33;"><?= $user['username'] ?></span></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['genre'] ?></td>
                    <td><?= $user['telephone'] ?></td>
                    <td><input type="checkbox" class="checkbox"></td>
                  </tr>
                 <?php
                 endforeach;
                  ?>
                    
            </table>
            
            <div class="footer-pres1">
            <span style="font-weight: 400; color: rgb(54, 54, 54); position: relative; left: 0.1%;font-size: 15px;">Items per page: </span>
            <form method="POST">
    <select name="itemsperpage" >
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
    </select>
    </form>

            <div class="navigation3">
                <span id="numview"><?=   $currentPage  ?> - <?= $itemsPerPage*$currentPage ?></span>
                <div class="nav3">
                    <form action="" method="post">
                        <input type="hidden" name="page" value="utilisateurs">
                        <input type="hidden" name="currentpage" value="1">
                        <button type="submit" <?= $currentPage == 1 ? 'disabled' : '' ?>>I<i class="fa-solid fa-chevron-left"></i></button>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="page" value="utilisateurs">
                        <input type="hidden" name="currentpage" value="<?= $currentPage-1 ?>">
                        <button type="submit" <?= $currentPage == 1 ? 'disabled' : '' ?>><i class="fa-solid fa-chevron-left"></i></button>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="page" value="utilisateurs">
                        <input type="hidden" name="currentpage" value="<?= $currentPage+1 ?>">
                        <button type="submit" <?= $currentPage == $totalPages ? 'disabled' : '' ?>><i class="fa-solid fa-chevron-right"></i></button>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="page" value="utilisateurs">
                        <input type="hidden" name="currentpage" value="<?= $totalPages ?>">
                        <button type="submit" <?= $currentPage == $totalPages ? 'disabled' : '' ?>><i class="fa-solid fa-chevron-right"></i>I</button>
                    </form>
                </div>
                </div>
        </div>
            
        </div>
    </div>
    </div>
    <?php else: ?>
              <div><h1 style="text-align: center;">pas d'apprenant pour le moment</h1>
            </div>
            <?php endif; ?>
   <div id="target">
    <div class="apprenant-one-modal">
        <div class="apprenant-one">
          <header>
            <h3>Nouvel Apprenant</h3>
            <button class="close" ><a href="#" style="text-decoration: none;color: black">x</a></button>
          </header>
          <div class="container">
            <div class="top">
              <div>
                <div class="cercle">/</div>
                <p>informations Perso.</p>
              </div>
              <hr />
              <div>
                <div class="cercle">2</div>
                <p>informations Supplementaires</p>
              </div>
            </div>
            <div class="middle">
              <div class="flex-col">
                <label for="nom">Nom</label
                ><input type="text" name="nom" placeholder="entrez le nom" />
              </div>
              <div class="flex-col">
                <label for="prenom">Prenom</label
                ><input
                  type="text"
                  name="prenom"
                  id="prenom"
                  placeholder="entrez le prenom"
                />
              </div>
              <div class="flex-col">
                <label for="email">Email</label
                ><input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="entrez l'email"
                />
              </div>
              <div class="flex-col">
                <label for="telephone">Telephone</label
                ><input
                  type="text"
                  name="telephone"
                  id="telephone"
                  placeholder="entrez le telephobe"
                />
              </div>
              <div class="flex-col">
                <label for="sexe">sexe</label
                ><input type="text" name="sexe" placeholder="Choisir le sexe*" />
              </div>
  
              <div class="flex-col">
                <label for="date">Date Naissance</label
                ><input type="date" name="date" />
              </div>
              <div class="flex-col">
                <label for="lieu">Lieu de Naissance</label
                ><input
                  type="text"
                  name="lieu"
                  placeholder="entrez le lieu de naissance"
                />
              </div>
              <div class="flex-col">
                <label for="cni">N CNI</label
                ><input
                  type="text"
                  name="cni"
                  placeholder="entrez le numero de carte d'identite"
                />
              </div>
            </div>
            <div class="bottom">
              <button><a href="#target2" style="text-decoration: none;color: white">suivant</a></button>
            </div>
          </div>
        </div>
      </div>
   </div>
   <div id="target2">
    <div class="apprenant-modal">
        <div class="form-apprenant">
          <header>
            <h3>Nouvel Apprenant</h3>
            <button><a href="#" style="text-decoration: none;color: black">X</a></button>
          </header>
          
          <div class="container">
            <div class="top">
              <div>
                <div class="cercle">/</div>
                <p>informations Perso.</p>
              </div>
              <hr />
              <div>
                <div class="cercle">2</div>
                <p>informations Supplementaires</p>
              </div>
            </div>
            <div class="middle">
              <div class="flex-col">
                <label for="nom">Nom & Prenom tuteur</label
                ><input
                  type="text"
                  placeholder="entrez le nom et le prenom du tuteur"
                />
              </div>
              <div class="flex-col">
                <label for="contact">Contact Tuteur</label
                ><input type="text" placeholder="entrez le contact du tuteur" />
              </div>
              <div class="flex-col">
                <label for="Photocopie">Photocopie CNI</label
                ><input type="file" />
              </div>
              <div class="flex-col">
                <label for="Extrait">Extrait de naissance</label
                ><input type="file" />
              </div>
              <div class="flex-col">
                <label for="Diplome">Diplome</label><input type="file" />
              </div>
  
              <div class="flex-col">
                <label for="Casier">Casier judiciaire</label><input type="file" />
              </div>
              <div class="flex-col">
                <label for="Visite">Visite Medicale</label><input type="file" />
              </div>
            </div>
            <div class="bottom">
              <button><a href="#" style="text-decoration: none;color: black">x cancel</a></button><button>+ cree nouvel apprenant</button>
            </div>
          </div>
        </div>


        <div class="apprenant-modal">
            <div class="form-apprenant">
              <header>
                
                <h3>Nouvel Apprenant</h3>
                <button><a href="#" style="text-decoration: none;color: black">X</a></button>
              </header>
              
              <div class="container">
                <div class="top">
                  <div>
                    <div class="cercle">/</div>
                    <p>informations Perso.</p>
                  </div>
                  <hr />
                  <div>
                    <div class="cercle">2</div>
                    <p>informations Supplementaires</p>
                  </div>
                </div>
                <div class="middle">
                  <div class="flex-col">
                    <label for="nom">Nom & Prenom tuteur</label
                    ><input
                      type="text"
                      placeholder="entrez le nom et le prenom du tuteur"
                    />
                  </div>
                  <div class="flex-col">
                    <label for="contact">Contact Tuteur</label
                    ><input type="text" placeholder="entrez le contact du tuteur" />
                  </div>
                  <div class="flex-col">
                    <label for="Photocopie">Photocopie CNI</label
                    ><input type="file" />
                  </div>
                  <div class="flex-col">
                    <label for="Extrait">Extrait de naissance</label
                    ><input type="file" />
                  </div>
                  <div class="flex-col">
                    <label for="Diplome">Diplome</label><input type="file" />
                  </div>
      
                  <div class="flex-col">
                    <label for="Casier">Casier judiciaire</label><input type="file" />
                  </div>
                  <div class="flex-col">
                    <label for="Visite">Visite Medicale</label><input type="file" />
                  </div>
                </div>
                <div class="bottom">
                  <button><a href="apprenants.html" style="text-decoration: none;color: black">x cancel</a></button><button>+ cree nouvel apprenant</button>
                </div>
              </div>
            </div>
          </div>
      </div>
   </div>
   <div id="target3">
    <div class="container-file-modal">
        <div class="modal">
          <div>
            <p>choisir un fichier excel</p>
            <input class="drop" placeholder="drop file here or click to upload" />
            <input type="file" name="" id="" />
          </div>
          <div class="btn-grp">
            <button style="background-color: red"><a href="apprenants.html" style="text-decoration: none;color: white">Fermer</a></button
            ><button style="background-color: #018f88">Enregistrer</button>
          </div>
        </div>
      </div>
   </div>
   