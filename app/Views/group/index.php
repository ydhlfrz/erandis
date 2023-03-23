<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>E-RANDIS | Kategori Kendaraan Dinas</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Groups</h1>
        <?php if(session()->id_user == 1) { ?>
        <div class="section-header-button">
            <a href="<?= site_url('groups/new') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
        </div>
        <?php } ?>
    </div>

    <?php if(session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success!</b>
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
                <h4>Kategori Kendaraan Dinas</h4>
            </div>
                <div class="card-body table-responsive col-md-6">
                    <table class="table table-bordered table-hover table-md">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Nama Grup</th>
                        <th>Info</th>
                        <?php if(session()->id_user == 1) { ?>
                        <th>Option</th>
                        <?php } ?>
                    </tr>
                    <?php foreach ($groups as $key => $value) : ?>
                    <tr>
                        <td class="text-center" style="width:20px"><?= $key + 1 ?></td>
                        <td style="width:350px"><?= $value->name_group ?></td>
                        <td style="width:150px"><?= $value->info_group ?></td>
                        <?php if(session()->id_user == 1) { ?>
                        <td class="text-center">
                            <a href="<?= site_url('groups/edit/'.$value->id_group) ?>" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-pen"></i></a>
                            <form action="<?= site_url('groups/delete/'.$value->id_group) ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')" data-toggle="tooltip" data-original-title="Delete">
                                <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            
        </div>
    </div>
</section>
<?= $this->endsection('content') ?>