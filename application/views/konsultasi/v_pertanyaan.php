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


<!-- Content -->
<div id="content">
  <h3>PETUNJUK</h3>
    <div id="accordion" role="tablist">
      <div class="card">
        <div class="card-header" id="heading1">
          <h5 class="mb-0">
            <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
              <i class="fa fa-arrow-circle-down"></i> Baca Dulu
            </div>
          </h5>
        </div>

        <div id="collapse1" class="collapse show">
          <div class="card-body">
            <p>Pada sesi ini akan ada 20 pertanyaan seputar kekuatan dan 20 pertanyaan seputar kelemahan  Anda. Dari masing-masing pertanyaan, ada 4 jawaban dan pilihlah yang paling cocok dengan anda.</p>
            <p>Pastikan setiap pertanyaan tidak terlewatkan.</p>
            <p>Kalau anda tidak yakin jawaban mana yang paling "cocok", tanyakan kepada teman atau orang tua atau sahabat anda, dan pikirkan apa jawaban anda ketika anda dalam keadaan masih kanak-kanak.</p>
          </div>
        </div>
      </div>
    </div>

    <br>
  
  <!-- pertanyaan form -->
  <h3>PERTANYAAN</h3>
  <div class="form-pertanyaan">
    <form id="form_pertanyaan" action="<?php echo base_url(). 'index.php/konsultasi/aksi_konsultasi'; ?>" method="post" class="form-check">
      <div class="col-md-6 col-centered">     
        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=1");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id1" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban1" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=2");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id2" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban2" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=3");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id3" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban3" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=4");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id4" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban4" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=5");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id5" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban5" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=6");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id6" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban6" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=7");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id7" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban7" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=8");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id8" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban8" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=9");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id9" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban9" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=10");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id10" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban10" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=11");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id11" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban11" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=12");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id12" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban12" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=13");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id13" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban13" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=14");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id14" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban14" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=15");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id15" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban15" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=16");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id16" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban16" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=17");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id17" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban17" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=18");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id18" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban18" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=19");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id19" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban19" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=20");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id20" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban20" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=21");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id21" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban21" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=22");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id22" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban22" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=23");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id23" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban23" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=24");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id24" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban24" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=25");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id25" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban25" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=26");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id26" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban26" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=27");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id27" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban27" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=28");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id28" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban28" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=29");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id29" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban29" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=30");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id30" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban30" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=31");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id31" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban31" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=32");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id32" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban32" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=33");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id33" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban33" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=34");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id34" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban34" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=35");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id35" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban35" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=36");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id36" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban36" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=37");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id37" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban37" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=38");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id38" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban38" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=39");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id39" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban39" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

        <div class="form-group">
          <?php 
            $sql = mysqli_query($koneksi,"SELECT * FROM pertanyaan WHERE id=40");
            $data = mysqli_fetch_array($sql);
          ?>
          <span class="lead pb-3"><?php echo $data['sw'] ?></span>
          <input type="hidden" name="id40" value="<?php echo $data['id'] ?>">
          <select id="jawaban" name="jawaban40" class="form-control requiered" autocomplete="off">
            <option value="" selected>--Pilih Salah Satu--</option>
            <option >a. <?php echo $data['jawaban1'] ?></option>
            <option >b. <?php echo $data['jawaban2'] ?></option>
            <option >c. <?php echo $data['jawaban3'] ?></option>
            <option >d. <?php echo $data['jawaban4'] ?></option>
          </select>
        </div>

      </div>

      <div class="col-md-6 col-centered">
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary form-control" value="submit">Cek Temperamen</button>
        </div>
      </div>
    </form>
  </div>
  <!-- akhir pertanyaan form -->
</div>

