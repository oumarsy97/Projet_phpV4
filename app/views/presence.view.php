
<span class="span" style=" margin-left: 10px;font-size: 20px;font-weight: bold;">
            Promotion: <span style="color: #009186;"><?= promotionActive()['libelle'] ?></span>
        </span>
<div class="liste-presences">
        <form class="zone1" action="" method="post">
           <input type="hidden" name="page" value="presence">
            <select name="statut" id="statut" aria-placeholder="statut" >
                <Option value="status">Statut</Option>
                <Option <?=isset($_SESSION['statut']) &&  $_SESSION['statut'] == 'present' ? 'selected' : '' ?> value="present">Présent</Option>
                <Option <?= isset($_SESSION['statut']) && $_SESSION['statut'] == 'absent' ? 'selected' : '' ?> value="absent">Absent</Option>
            </select>
            <select name="referentiel" id="ref">
                <Option value="referentiel">Référentiel</Option>
                <?php foreach($referentiels as $referentiel): ?>
                <Option <?= isset($_SESSION['referentiel']) && $_SESSION['referentiel'] == $referentiel['id'] ? 'selected' : '' ?> value="<?= $referentiel['id'] ?>"><?= $referentiel['libelle'] ?></Option>
                <?php endforeach; ?>
             </select>
            <input type="date" id="datechoice" placeholder="JJ/MM/AAAA" name="datechoice" value="<?= isset($_SESSION['datechoice']) ? $_SESSION['datechoice'] : date('Y-m-d')  ?>">
            <button id="refresh" type="submit">Rafraîchir</button>
</form>
        <div class="tableau">
            <table>
                <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Référentiel</th>
                    <th>Heure d'arrivée</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
    <?php foreach($presences as $presence): ?>
    <tr>
        <td><?= $presence['matricule'] ?></td>
        <td><?= $presence['name'] ?></td>
        <td><?= $presence['username'] ?></td>
        <td><?= $presence['telephone'] ?></td>
        <td><?= getlibelle($presence['id_referentiel']) ?></td>
        <td style="color: <?= ($presence['heureArrive'] <= '08:15' ? 'green' : 'red') ?>;"><?= $presence['heureArrive'] ?></td>
        <td style="color: <?= ($presence['status'] === 'present' ? 'green' : 'red') ?>;"><p><?= strtoupper($presence['status']) ?></p></td>
    </tr>
                <?php endforeach; ?>
                </tbody>
               
            </table>
        <div class="footer-pres">
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
            <span id="numview"><?=   $currentPagePresence  ?> - <?= $itemparpage*$currentPagePresence ?></span>
               <div class="nav2">
                    <form action="" method="post">
                        <input type="hidden" name="page" value="presence">
                        <input type="hidden" name="currentpagePresence" value="1" >
                        <button type="submit" <?= $currentPagePresence == 1 ? 'disabled' : '' ?>>I<i class="fa-solid fa-chevron-left"  ></i></button>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="page" value="presence" >
                        <input type="hidden" name="currentpagePresence" value="<?= $currentPagePresence-1 ?>">
                        <button type="submit" <?= $currentPagePresence == 1 ? 'disabled' : '' ?>><i class="fa-solid fa-chevron-left"></i></button>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="page" value="presence" >
                        <input type="hidden" name="currentpagePresence" value="<?=  $currentPagePresence+1 ?>">
                        <button type="submit"<?= $currentPagePresence == $nbrpage ? 'disabled' : '' ?>><i class="fa-solid fa-chevron-right"></i></button>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="page" value="presence" >
                        <input type="hidden" name="currentpagePresence" value="<?= $nbrpage  ?>">
                        <button type="submit" <?= $currentPagePresence == $nbrpage ? 'disabled' : '' ?>><i class="fa-solid fa-chevron-right"></i>I</button>
                    </form>
                </div>
                </div>
        </div>
        </div>
        
    </div>