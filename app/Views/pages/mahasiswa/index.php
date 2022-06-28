<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <?php if (!empty(session()->getFlashdata('message'))) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('message'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if (!empty(session()->getFlashdata('success_add'))) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('success_add'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if (!empty(session()->getFlashdata('success_delete'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('success_delete'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('mahasiswa/create'); ?>" class="btn btn-primary"> Tambah Mahasiswa</a>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>IPK</th>
                            <th>Nama Prodi</th>
                            <th>Nama Kelas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>
                        <?php foreach ($mahasiswa as $i => $row) : ?>
                            <tr>
                                <td><?= ++$i ?></td>
                                <td><?= $row->nim ?></td>
                                <td><?= $row->nama ?></td>
                                <td><?= $row->gender ?></td>
                                <td><?= $row->tmp_lahir ?></td>
                                <td><?= $row->tgl_lahir ?></td>
                                <td><?= $row->ipk ?></td>
                                <td><?= $row->nama_prodi ?></td>
                                <td><?= $row->nama_kelas ?></td>
                                <td class="d-flex align-items-center">
                                    <a class="btn btn-info btn-sm mr-2" href="<?= base_url("mahasiswa/edit/" . $row->id) ?>">
                                        <i class="fas fa-pencil-alt"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="<?= base_url("mahasiswa/delete/" . $row->id) ?>">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>

<?= $this->endSection() ?>