
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
    <img src="../app/views/assets/img/icon.png" alt="Placeholder Image">
    <td><?= $promo['dateDebut'] ?></td>
    <td><?= $promo['dateFin'] ?></td>
    <td style="color: <?= ($promo['statut'] === 'en cours' ? 'green' : 'red') ?>;"><?= $promo['statut'] ?></td>
    <td>

    <form action="" method="post">
        <input type="hidden" name="page" value="promotion">
        <input type="hidden" name="changePromo" value="<?= $promo['id'] ?>">
        <i class="fa-sharp fa-thin fa-square-check"></i>
        <button class="btneditpromo" type="submit"><i class="<?= $promo['statut'] === 'en cours' ? "fa-sharp fa-thin fa-square-check editicon fa-solid" : "fa-sharp fa-thin fa-square editicon fa-solid"?>"></i></button></td>
    </form>    
    </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        
    </tfoot>
    </table>
    </div>
    <div class="footer-presP">
            <span style="font-weight: 400; color: rgb(54, 54, 54); position: relative; left: 0.1%;font-size: 15px;">Items per page: </span>
            <form method="POST">
            <select name="itemsperpage">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
            </select>
            <input type="submit" value="page">
            </form>

            <div class="navigation2">
            <span id="numview"><?=   $currentPagePromo  ?> - <?= $itemparpage*$currentPagePromo ?></span>
               <div class="nav2">
                    <form action="" method="post">
                        <input type="hidden" name="page" value="promotion">
                        <input type="hidden" name="currentPagePromo" value="1" >
                        <button type="submit" <?= $currentPagePromo == 1 ? 'disabled' : '' ?>>I<i class="fa-solid fa-chevron-left"  ></i></button>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="page" value="promotion" >
                        <input type="hidden" name="currentPagePromo" value="<?= $currentPagePromo-1 ?>">
                        <button type="submit" <?= $currentPagePromo == 1 ? 'disabled' : '' ?>><i class="fa-solid fa-chevron-left"></i></button>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="page" value="promotion" >
                        <input type="hidden" name="currentPagePromo" value="<?=  $currentPagePromo+1 ?>">
                        <button type="submit"<?= $currentPagePromo == $nbrpage ? 'disabled' : '' ?>><i class="fa-solid fa-chevron-right"></i></button>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="page" value="promotion" >
                        <input type="hidden" name="currentPagePromo" value="<?= $nbrpage  ?>">
                        <button type="submit" <?= $currentPagePromo == $nbrpage ? 'disabled' : '' ?>><i class="fa-solid fa-chevron-right"></i>I</button>
                    </form>
                </div>
                </div>
        </div>
    </div>
    </div>
    </div>
     

