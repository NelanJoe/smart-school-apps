<?= $this->extend('layouts/templates')?>
<?= $this->section('content')?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Jenis Kegiatan</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?=base_url('jenis-kegiatan/save')?>" method="post">
                            <div class="form-group">
                                <label for="nama">Nama Jenis Kegiatan</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Jenis Kegiatan">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection()?>
