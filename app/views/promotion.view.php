
<div class="containerZ">
    <span>Promotions</span>
    <span>Promos . Liste</span>
</div>
 <div class="promo">
    <div class="div">
    <div class="entete">
    <span>Liste Des Promotions <span style="color: #009186;">(<?= count($promotions) ?>)</span></span>
    <div class="cherch" >
    <div style="position: relative;">
    <form action="" method="post">
        <input type="hidden" name="page" value="promotion">
        <input type="text" placeholder="Recherche ici..." value="<?= $_SESSION['recherche'] ?? '' ?>" name="recherche">
    </form>
    <i class="fa-solid fa-magnifying-glass" style="position: absolute; right: 31px;top: 5px;"></i>
    </div>
    <form action="" method="post">
        <input type="hidden" name="page" value="nouveaupromo">
        <button class="btnnew" type="submit"> <i class="fa-solid fa-plus"> </i> <span>Nouvelle </span></button>
    </form>
    </div>
    </div>
    <div class="table">
    <table>
    <thead>
    <tr>
    <th>Libelle</th>
    <th>Date Début</th>
    <th>Date Fin</th>
    <th>Etat</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($promotions as $promo) : ?>
    <tr>
    <td class="img" style="width: 30%;height: 100%;"><img src="../app/views/assets/img/icon.png" alt=""> <span><?= $promo['libelle'] ?></span></td>
    <td><?= $promo['dateDebut'] ?></td>
    <td><?= $promo['dateFin'] ?></td>
    <td style="color: <?= ($promo['statut'] === 'en cours' ? 'green' : 'red') ?>;"><?= $promo['statut'] ?></td>
    <td><i class="fa-solid fa-pen-to-square"></i></td>
    </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
    </tfoot>
    </table>
   
    </div>
    </div>
    </div>
    </div>

