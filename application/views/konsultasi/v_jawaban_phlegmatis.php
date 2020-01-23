	<title>hasil tes</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/asset_artikel/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/asset_artikel/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/asset_artikel/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/asset_temperamen/css/style_temperamen.css">

<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db   = 'temperamen';

	$koneksi = mysqli_connect($host, $user, $pass, $db);
?>

<div id="content">
  <form id="form_hasil" action="<?php echo base_url(). 'index.php/konsultasi/simpan_data_konsultasi'; ?>" method="post" class="form-check">
    <!-- ambil data pasien -->
      <?php 
            $query = mysqli_query($koneksi,"SELECT * FROM konsultasi");
            $data_pasien = mysqli_fetch_array($query);
      ?>
      <input type="hidden" name="nama" value="<?php echo $data_pasien['nama'] ?>">
      <input type="hidden" name="jk" value="<?php echo $data_pasien['jk'] ?>">
      <input type="hidden" name="usia" value="<?php echo $data_pasien['usia'] ?>">
    <!-- akhir data pasien -->
    
  	<h3>Temperamen anda adalah</h3> <input type="text" name="hasil" value="<?php echo $hasil ?>">
    <div id="accordion" role="tablist">

      <div class="card">
      	<?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM `kepribadian` WHERE `kepribadian`.`temperamen`='Phlegmatis' AND `kepribadian`.`level`='emosi'");
            $d = mysqli_fetch_array($sql);
        ?>
        <div class="card-header" id="heading1">
          <h5 class="mb-0">
            <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
              <i class="fa fa-arrow-circle-down"></i> <?php echo $d['level'] ?> Anda
            </div>
          </h5>
        </div>
        <div id="collapse1" class="collapse show">
          <div class="card-body">
            <p><?php echo $d['emosi'] ?></p>
          </div>
        </div>
      </div>

      <div class="card">
      	<?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM `kepribadian` WHERE `kepribadian`.`temperamen`='Phlegmatis' AND `kepribadian`.`level`='pekerjaan'");
            $d = mysqli_fetch_array($sql);
        ?>
        <div class="card-header" id="heading1">
          <h5 class="mb-0">
            <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
              <i class="fa fa-arrow-circle-down"></i> Dibidang <?php echo $d['level'] ?>
            </div>
          </h5>
        </div>
        <div id="collapse1" class="collapse show">
          <div class="card-body">
            <p><?php echo $d['emosi'] ?></p>
          </div>
        </div>
      </div>

      <div class="card">
      	<?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM `kepribadian` WHERE `kepribadian`.`temperamen`='Phlegmatis' AND `kepribadian`.`level`='orang tua'");
            $d = mysqli_fetch_array($sql);
        ?>
        <div class="card-header" id="heading1">
          <h5 class="mb-0">
            <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
              <i class="fa fa-arrow-circle-down"></i> Sebagai <?php echo $d['level'] ?>
            </div>
          </h5>
        </div>
        <div id="collapse1" class="collapse show">
          <div class="card-body">
            <p><?php echo $d['emosi'] ?></p>
          </div>
        </div>
      </div>

      <div class="card">
      	<?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM `kepribadian` WHERE `kepribadian`.`temperamen`='Phlegmatis' AND `kepribadian`.`level`='teman'");
            $d = mysqli_fetch_array($sql);
        ?>
        <div class="card-header" id="heading1">
          <h5 class="mb-0">
            <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
              <i class="fa fa-arrow-circle-down"></i> Sebagai <?php echo $d['level'] ?>
            </div>
          </h5>
        </div>
        <div id="collapse1" class="collapse show">
          <div class="card-body">
            <p><?php echo $d['emosi'] ?></p>
          </div>
        </div>
      </div>

    </div>

    <div class="col-md-6 col-centered">
      <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary form-control" value="submit">Selesai</button>
      </div>
    </div>
  </form>
</div>


