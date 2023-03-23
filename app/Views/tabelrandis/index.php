<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>E-RANDIS | Tabel Kendaraan Dinas</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Randis Table</h1>
        <?php if(session()->id_user == 1) { ?>
        <div class="section-header-button">
            <a href="<?= site_url('tabelrandis/new') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
        </div>
        <?php } ?>
    </div>
    <div class="section-header col-md-12">
        <?php
        
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db   = 'randis';

            $kon = mysqli_connect($host, $user, $pass, $db);
            $show = mysqli_query($kon, "SELECT * FROM timer limit 1");
            $data = mysqli_fetch_array($show);
        
        ?>
        <div class="someTimer" data-date="<?= $data['tanggal'] ?>" style="width: 300px; height: 75px; padding: 0px; box-sizing: border-box;" data-toggle="tooltip" data-original-title="Waktu Pemutakhiran Data Kendaraan oleh OPD"></div>
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
                <h4>Tabel Kendaraan Dinas</h4>
            </div>
            <div class="card-header">
                <form action="" method="get" autocomplete="off">
                    <div class="float-left">
                        <?php $request = \Config\Services::request(); ?>
                        <input type="text" value="<?= $request->getGet('keyword') ?>" name="keyword" class="form-control" style="width:155pt;" placeholder="Keyword Pencarian">
                    </div>
                    <div class="float-right ml-2">
                        <button type="submit" class="btn btn-info btn-sm"> <i class="fas fa-search"></i> </button>
                        
                        <?php 
                            $request = \Config\Services::request();
                            $keyword = $request->getGet('keyword');
                            if($keyword != '') {
                                $param = "?keyword=".$keyword;
                            } else {
                                $param = "";
                            }
                        ?>

                        <a href="<?= site_url('tabelrandis/export'.$param) ?>" class="btn btn-primary">
                            <i class="fas fa-file-excel"></i>&nbsp; Export Excel
                        </a>
                        
                        <div class="dropdown d-inline">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fas fa-file-upload"></i> Import Excel
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item has-icon" href="<?=base_url('randistable-template-file.xlsx')?>"><i class="fas fa-file-download"></i>&nbsp; Download Template</a>
                                <a class="dropdown-item has-icon" href="" data-toggle="modal" data-target="#modal-import-excel">
                                    <i class="fas fa-upload"></i>&nbsp; Upload File
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                </form>
            </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-sm">
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
                        <th style="width: 90px;">Nomor Polisi</th>
                        <th style="width: 60px;">Kondisi</th>
                        <th>Status Pengguna</th>
                        <th>Keterangan</th>
                        <th style="width: 100px;">Option</th>
                    </tr>
                    <?php
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $no = 1 + (10 * ($page - 1));
                    foreach ($randistable as $key => $value) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value->name_opd ?></td>
                        <td class="text-center"><?= $value->id_group ?></td>
                        <td><?= $value->jenis ?></td>
                        <td><?= $value->merk ?></td>
                        <td><?= $value->no_rang ?></td>
                        <td><?= $value->no_mesin ?></td>
                        <td class="text-center"><?= $value->th_pembuatan ?></td>
                        <td class="text-center"><?= $value->th_perolehan ?></td>
                        <td class="text-center"><?= $value->no_pol ?></td>
                        <td class="text-center"><?= $value->kondisi ?></td>
                        <td><?= $value->pengguna ?></td>
                        <td><?= $value->ket ?></td>
                        <td class="text-center">
                            <?php if(session()->id_user == 1) { ?>
                            <a href="<?= site_url('tabelrandis/'.$value->id_randis.'/edit') ?>" style="color: #f39c12" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-pen"></i></a>
                            <form action="<?= site_url('tabelrandis/'.$value->id_randis) ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <a href="" class="d-inline" onclick="return confirm('Yakin ingin menghapus?')" style="color: #e74c3c"  data-toggle="tooltip" data-original-title="Delete">
                                <i class="fas fa-trash"></i>
                                </a>
                            </form>
                            <a href="" class="d-inline" style="color: #3498db"  data-toggle="tooltip" data-original-title="View"><i class="fas fa-eye"></i></a>           
                            <?php } ?>
                            <?php if(session()->id_user != 1) { ?>
                            <a href="" class="d-inline" style="color: #3498db"  data-toggle="tooltip" data-original-title="View"><i class="fas fa-eye"></i></a>     
                            <?php } ?>      
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                    <div class="float-left">
                        <i>Showing <?= 1 + (10 * ($page - 1)) ?> to <?= $no - 1 ?> of <?= $pager->getTotal() ?> entries </i>
                    </div>
                    <div class="float-right">
                        <?= $pager->links('default', 'pagination') ?>
                    </div>
                </div>
        </div>
    </div>
</section>

<div class="modal fade show" tabindex="-1" role="dialog" id="modal-import-excel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle">Upload File</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('tabelrandis/import') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <label>File Excel</label>
                    <div class="custom-file">
                        <?= csrf_field() ?>
                        <input type="file" name="file_excel" class="custom-file-input" id="file_excel" required>
                        <label for="file_excel" class="custom-file-label">Pilih File</label>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>  
            </form>
        </div>
    </div>
</div>
<?= $this->endsection('content') ?>
