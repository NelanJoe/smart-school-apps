<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2>Jenis Kegiatan</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover text-nowrap table-bordered ">
                <thead class="text-center">
                    <tr>
                        <th>NO</th>
                        <th>Jenis Pelatihan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jenis as $key => $jk) : ?>
                        <tr>
                            <td class="text-center"><?= ++$key ?></td>
                            <td><?= $jk['nama'] ?></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                                <a href="#" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>