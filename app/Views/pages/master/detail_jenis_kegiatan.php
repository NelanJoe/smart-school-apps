<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Kegiatan</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text text-muted">Nama: <?= $kegiatan['nama'] ?></span>
                            <a href="/jenis-kegiatan">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>