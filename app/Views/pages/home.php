<?= $this->extend('layout_navbar/template'); ?>

<?= $this->section('kontennya'); ?>
<div class="container">
    <br><br><br><br><br><br><br>
    <div class="card-group mt-5" align="center">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title jus">Loket-A</h5>
                <a href="/Antrian/index" class="btn btn-success rounded-pill px-4 py-2">
                    Ambil Antrian <i class="bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

        <!-- <div class="card">
            <div class="card-body">
                <h5 class="card-title">Loket-B</h5>
                <a id="initombol" class="btn btn-primary " href="/Antrian/index" role="button">Ambil Antrian</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Loket-C</h5>
                <a id="initombol" class="btn btn-primary " href="/antrian/index" role="button">Ambil Antrian</a>
            </div>
        </div> -->
    </div>
</div>

<?= $this->endSection(); ?>