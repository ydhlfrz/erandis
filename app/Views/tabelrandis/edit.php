Ranis Edit<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>E-RANDIS | Edit Kendaraan Dinas</title>
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
                <h4>Edit Randis</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('tabelrandis/'.$tabelrandis->id_randis) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Perangkat Daerah</label>
                        <select class="form-control" name="id_opd" id="">
                            <option value="" hidden></option>
                            <?php foreach ($opd as $key => $value) : ?>
                                <option value="<?= $value->id_opd ?>" <?= $tabelrandis->id_opd == $value->id_opd ? 'selected' : null ?>>
                                    <?= $value->name_opd ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="id_group" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <option value="Roda 6" <?= $tabelrandis->id_group == 'Roda 6'? 'selected' : '' ?>>Roda 6</option>
                            <option value="Roda 4" <?= $tabelrandis->id_group == 'Roda 4'? 'selected' : '' ?>>Roda 4</option>
                            <option value="Roda 3" <?= $tabelrandis->id_group == 'Roda 3'? 'selected' : '' ?>>Roda 3</option>
                            <option value="Roda 2" <?= $tabelrandis->id_group == 'Roda 2'? 'selected' : '' ?>>Roda 2</option>
                            <option value="Alat Berat" <?= $tabelrandis->id_group == 'Alat Berat'? 'selected' : '' ?>>Alat berat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kendaraan</label>
                        <input type="text" name="jenis" value="<?= $tabelrandis->jenis ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Merk / Type</label>
                        <input type="text" name="merk" value="<?= $tabelrandis->merk ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Rangka</label>
                        <input type="text" name="no_rang" value="<?= $tabelrandis->no_rang ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Mesin</label>
                        <input type="text" name="no_mesin" value="<?= $tabelrandis->no_mesin ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Pembuatan</label>
                        <input type="text" name="th_pembuatan" value="<?= $tabelrandis->th_pembuatan ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Perolehan</label>
                        <input type="text" name="th_perolehan" value="<?= $tabelrandis->th_perolehan ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Polisi</label>
                        <input type="text" name="no_pol" value="<?= $tabelrandis->no_pol ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kondisi Kendaraan</label>
                        <select name="kondisi" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <option value="Baik" <?= $tabelrandis->kondisi == 'Baik'? 'selected' : '' ?>>Baik</option>
                            <option value="Rusak Ringan" <?= $tabelrandis->kondisi == 'Rusak Ringan'? 'selected' : '' ?>>Rusak Ringan</option>
                            <option value="Rusak Berat" <?= $tabelrandis->kondisi == 'Rusak Berat'? 'selected' : '' ?>>Rusak Berat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status Pengguna</label>
                        <input type="text" name="pengguna" value="<?= $tabelrandis->pengguna ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="ket" value="<?= $tabelrandis->ket ?>" class="form-control">
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