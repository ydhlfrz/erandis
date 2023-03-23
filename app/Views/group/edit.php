<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>E-RANDIS | Edit Kategori</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('groups') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Groups</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Kategori Randis</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('groups/update/'.$groups->id_group) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" name="name_group" class="form-control" value="<?= $groups->name_group ?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Info Kategori</label>
                        <textarea name="info_group" class="form-control"></textarea>
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