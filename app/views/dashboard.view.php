<div class="all">
<span class="spand">
    <span>Promotion</span>
    <span>Promos.Liste.Détails</span>
</span>
<div class="contient">
    <div class="grid1">
        <div class="grid1-1" >
            <span>Libelle : <span style="color: #009186;"><?= promotionActive()['libelle'] ?></span></span>
            <span>Date début : <span style="color: #009186;"><?= promotionActive()['dateDebut'] ?></span></span>
        </div>
        <div class="grid1-2">
           <span> Date Fin Prévue : <span style="color: #009186;"><?= promotionActive()['dateFin'] ?></span></span>
           <span> Date Fin Réelle : <span style="color: #009186;"><?= promotionActive()['dateFin'] ?></span></span>
        </div>
    </div>
    <div class="grid">
        <i class="fa-solid fa-file-lines fa-3x" style="color: #009186;"></i>
        
    <span>Nombre de Réferentiels : <span style="color: #009186;"><?= 5 ?></span></span>
    </div>
    <div class="grid">
        <i class="fa-solid fa-user-graduate fa-3x" style="color: #009186;"></i>
        <span>Nombre d'apprenants Actifs : <span style="color: #009186;"><?= 5 ?></span></span>
    </div>
    <div class="grid">
        <i class="fa-solid fa-user-graduate fa-3x" style="color: #009186;"></i>
        <span>Nombre d'apprenants Inactifs : <span style="color: #009186;"><?= 5 ?></span></span>
    </div>
</div>
<div class="contient1">
 <div class="leftd">
    <span style="display: flex; align-items: center;justify-content: space-between;">
        <span>Liste des Referentiels</span>
        <span>...</span>
    </span>
    <div class="ref">
    <?php foreach($referentiels as $referentiel): ?>
    <div class="referentiel">
        <span><?= $referentiel->libelle ?></span>
        <img src="../app/views/assets/img/classe.jpg" alt="">
    </div>
    <?php endforeach; ?>
        
    </div>
 </div>
</div>

</div>