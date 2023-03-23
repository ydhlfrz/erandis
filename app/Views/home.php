<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>E-RANDIS | BMD</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1>Dashboard</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-car"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Kendaraan Dinas</h4>
                  </div>
                  <div class="card-body">
                  <?= countData('randistable') ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Perangkat Daerah</h4>
                  </div>
                  <div class="card-body">
                  <?= countData('opd') ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Dokumen</h4>
                  </div>
                  <div class="card-body">
                  -
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Akun Aktif</h4>
                  </div>
                  <div class="card-body">
                  <?= countData('users') ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-header">
                  <h4>Waktu Pemutakhiran Data Kendaraan oleh OPD</h4>
                </div>
                <div class="card-body">
                  <?php
          
                    $host = 'localhost';
                    $user = 'root';
                    $pass = '';
                    $db   = 'randis';

                    $kon = mysqli_connect($host, $user, $pass, $db);
                    $show = mysqli_query($kon, "SELECT * FROM timer limit 1");
                    $data = mysqli_fetch_array($show);
                  
                  ?>
                  <div class="someTimer" data-date="<?= $data['tanggal'] ?>" style="width: 800px; height: 185px; padding: 0px; box-sizing: border-box;"></div>
                </div>
                </div>
              </div>
            </div>
          </div>
    </section>
<?= $this->endsection('content') ?>