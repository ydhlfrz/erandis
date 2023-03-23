<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>E-RANDIS | Daftar Perangkat Daerah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Perangkat Daerah</h1>
        <?php if(session()->id_user == 1) { ?>
        <div class="section-header-button">
            <a href="<?= site_url('opd/new') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
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
                <h4>Daftar OPD</h4>
            </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover table-md">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Perangkat Daerah</th>
                        <th>Kode</th>
                        <?php if(session()->id_user == 1) { ?>
                        <th>Option</th>
                        <?php } ?>
                    </tr>
                    <?php foreach ($opd as $key => $value) : ?>
                    <tr>
                        <td class="text-center" style="width:20px"><?= $key + 1 ?></td>
                        <td><?= $value->name_opd ?></td>
                        <td class="text-center"><?= $value->kode_opd ?></td>
                        <?php if(session()->id_user == 1) { ?>
                        <td class="text-center" style="width:10%">
                            <a href="<?= site_url('opd/edit/'.$value->id_opd) ?>" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-pen"></i></a>
                            <form action="<?= site_url('opd/delete/'.$value->id_opd) ?>" method="post" class="d-inline">
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