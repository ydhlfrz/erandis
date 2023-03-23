<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>E-RANDIS | Tambah kendaraan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('tabel') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Kendaraan</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Kendaraan / Randis</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('tabel') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Perangkat Daerah</label>
                        <input type="text" name="opd" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kendaraan</label>
                        <input type="text" name="jenis" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Merk / Type</label>
                        <input type="text" name="merk" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Nomor Rangka</label>
                        <input type="text" name="no_rang" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Nomor Mesin</label>
                        <input type="text" name="no_mesin" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Tahun Pembuatan</label>
                        <input type="text" name="th_pembuatan" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Tahun Perolehan</label>
                        <input type="text" name="th_perolehan" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Nomor Polisi</label>
                        <input type="text" name="no_pol" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Kondisi Kendaraan</label>
                        <input type="text" name="kondisi" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Status Pengguna</label>
                        <input type="text" name="pengguna" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="ket" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Scan Dokumen Kendaraan (BPKB)</label>
                        <input type="file" name="dokumen" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection('content') ?>