New Index<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>E-RANDIS | Tambah Kendaraan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('tabelrandis') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Randis Table</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Kategori Randis</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('tabelrandis') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Perangkat Daerah</label>
                        <select class="form-control" name="id_opd" id="" required autofocus>
                            <option value="">- Pilih -</option>
                            <?php foreach ($opd as $key => $value) : ?>
                                <option value="<?= $value->id_opd ?>"><?= $value->name_opd ?></option>
                            <?php endforeach; ?>   
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="id_group" id="">
                            <option value="">- Pilih -</option>
                            <option value="Roda 6">Roda 6</option>
                            <option value="Roda 4">Roda 4</option>
                            <option value="Roda 3">Roda 3</option>
                            <option value="Roda 2">Roda 2</option>
                            <option value="Alat Berat">Alat Berat</option>  
                        </select>
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
                        <select class="form-control" name="kondisi" id="" required autofocus>
                            <option value="">- Pilih -</option>
                            <option value="Baik">Baik</option>
                            <option value="Rusak Ringan">Rusak Ringan</option>
                            <option value="Rusak Berat">Rusak Berat</option> 
                        </select>
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