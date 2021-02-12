<?php
require_once 'compteur.php';
$annee = (int)date('Y');
$annee_selection = empty($_GET['annee']) ? null : (int)$_GET['annee'];
$mois_selection =empty($_GET['mois']) ? null : $_GET['mois'];  
if($annee_selection && $mois_selection){
    $total = nombre_vues_mois($annee_selection, $mois_selection );
    $detail = nombre_vues_detail_mois($annee_selection, $mois_selection);
}else{
    $total = nombre_vues(); };
    $mois = [
        '01' => 'janvier',
        '02' => 'fevrier',
        '04' => 'mars',
        '05' => 'avril',
        '06' => 'mai',
        '07' => 'juin',
        '08' => 'juillet',
        '09' => 'août',
        '10' => 'septembre',
        '11' => 'octobre',
        '12' => 'novembre',
        '13' => 'decembre'
    ];
    require 'header.php'; ?>

<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <a class='list-group-item <?= $annee - $i === $annee_selection ? 'active' : ''; ?>' href="dashboard.php?annee=<?= $annee - $i ?>"><?= $annee - $i ?></a>
                <?php if ($annee - $i === $annee_selection) : ?>
                    <div class="list-group">
                        <?php foreach ($mois as $numero => $nom) : ?>
                            <a href="dashboard.php?annee=<?= $annee_selection ?>&mois=<?= $numero?>" class="list-group-item <?= $numero === $mois_selection ? 'active' : '';?> "><?= $nom ?></a>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            <?php endfor ?>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body">

                <strong style="font-size: 3em"> <?= $total ?></strong><br>
                visite<?= $total > 1 ? 's' : '' ?> aux total
            </div>
        </div>
<?php if (isset($detail)): ?>
<h2>detail des visites pour le mois</h2>
<table class="table table-striped">
<thead>
    <tr>
        <th>Jours</th>
        <th>Mois</th>
        <th>Année</th>
        <th>Nombre de visites</th>
    </tr>
</thead>
<tbody>
<?php foreach($detail as $ligne): ?>
    <tr>
        <td><?= $ligne['jour'] ?></td>
        <td><?=$ligne['mois']?></td>
        <td><?=$ligne['annee']?></td>
        <td><?=$ligne['visite']?> Visite<?= $ligne['visite'] >1 ? 's' : ''  ?></td>
    </tr>
    <?php endforeach ?>
</tbody>
</table>

<?php endif ?>

    </div>
</div>





<?php
require 'footer.php'; ?>