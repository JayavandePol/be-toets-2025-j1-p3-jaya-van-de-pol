<?php require APPROOT . '/views/includes/header.php'; ?>
<style>
    h3 {
        color: red;
        text-align: center;
    }
</style>
<div class="container mt-3">

<div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>


    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10">
        <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Nettowaarde (mln $)</th>
            <th>Land</th>
            <th>Mobiel</th>
            <th>Leeftijd</th>
            <th>Actief</th>
            <th>Opmerking</th>
            <th>Aangemaakt</th>
            <th>Gewijzigd</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data['zangeressen'] as $zangeres): ?>
            <tr>
                <td><?= $zangeres->Id; ?></td>
                <td><?= $zangeres->Naam; ?></td>
                <td><?= $zangeres->Nettowaarde; ?></td>
                <td><?= $zangeres->Land; ?></td>
                <td><?= $zangeres->Mobiel; ?></td>
                <td><?= $zangeres->Leeftijd; ?></td>
                <td><?= $zangeres->Opmerking ?? ''; ?></td>
                <td><?= $zangeres->DatumAangemaakt; ?></td>
                <td><?= $zangeres->DatumGewijzigd; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="col-1"></div>
<a href="<?= URLROOT; ?>/homepages/index">terug</a>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>
