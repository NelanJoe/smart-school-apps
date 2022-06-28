<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <?php if (session()->getFlashdata('success_add')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success_add') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?><?php if (session()->getFlashdata('success_delete')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success_delete') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="card-title mr-4">Kegiatan</h3>
                        <a class="btn btn-primary btn-sm" href="<?= base_url('jenis-kegiatan/create')?>">
                            <i class="fas fa-plus"></i>
                            Add</a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Jenis Kegiatan</th>
                                <th>AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($jenisKegiatan as $key => $jk) : ?>
                                <tr>
                                    <td><?= ++$key ?></td>
                                    <td><?= $jk['nama'] ?></td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="<?= base_url("jenis-kegiatan/detail/{$jk['id']}") ?>">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="<?= base_url("jenis-kegiatan/edit/{$jk['id']}") ?>">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="<?= base_url("jenis-kegiatan/delete/{$jk['id']}") ?>" onclick="return('yakin?')">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>