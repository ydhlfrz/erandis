<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>E-RANDIS | Tabel Kendaraan Dinas</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Kendaraan Dinas</h1>
        <div class="section-header-button">
            <a href="<?= site_url('tabel/add') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
        </div>
    </div>

    <?php if(session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success !</b>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Error !</b>
                <?= session()->getFlashdata('error') ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tabel Kendaraan Dinas</h4>
            </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover table-md">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Perangkat Daerah</th>
                        <th>Kategori</th>
                        <th>Jenis Kendaraan</th>
                        <th>Merk/Type</th>
                        <th>Nomor Rangka</th>
                        <th>Nomor Mesin</th>
                        <th>Tahun Pembuatan</th>
                        <th>Tahun Perolehan</th>
                        <th>Nomor Polisi</th>
                        <th>Kondisi (B/RR/BB)</th>
                        <th>Status Pengguna</th>
                        <th>Keterangan</th>
                        <th>Option</th>
                    </tr>
                    <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $value->opd ?></td>
                        <td><?= $value->kategori ?></td>
                        <td><?= $value->jenis ?></td>
                        <td><?= $value->merk ?></td>
                        <td><?= $value->no_rang ?></td>
                        <td><?= $value->no_mesin ?></td>
                        <td><?= $value->th_pembuatan ?></td>
                        <td><?= $value->th_perolehan ?></td>
                        <td><?= $value->no_pol ?></td>
                        <td><?= $value->kondisi ?></td>
                        <td><?= $value->pengguna ?></td>
                        <td><?= $value->ket ?></td>
                        <td class="text-center" style="width:10%">
                            <a href="<?= site_url('tabel/edit/'.$value->id_randis) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>
                            <form action="<?= site_url('tabel/'.$value->id_randis) ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            
        </div>
    </div>
</section>
<?= $this->endsection('content') ?>