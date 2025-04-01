<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-12">
            <h3 class="text-success text-center fw-bold mt-4">Top 5 Cyberaanvallen Aller tijden</h3>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Jaar</th>
                        <th scope="col">Aantal Slachtoffers (mln)</th>
                        <th scope="col">Type Aanval</th>
                        <th scope="col">Schade (mln)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['cyberaanvallen'] as $cyberaanval) : ?>
                        <tr>
                            <td><?= $cyberaanval->Naam; ?></td>
                            <td><?= $cyberaanval->Jaar; ?></td>
                            <td><?= $cyberaanval->AantalSlachtoffers; ?></td>
                            <td><?= $cyberaanval->TypeAanval; ?></td>
                            <td><?= $cyberaanval->Schade; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">terug</a>
        </div>
        <div class="col-1"></div>
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
