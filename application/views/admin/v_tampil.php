<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/asset_artikel/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/asset_artikel/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/asset_artikel/css/bootstrap.css">
<style type="text/css">
  #content{
    margin-top: 100px;
    width:60%;
    margin-bottom: 100px;
  }

</style>


<!-- Content -->
<div id="content">
  <h3>List Artikel</h3>
  <!-- Post -->
  <table class="table table-striped">
    <thead class="thead-inverse">
      <tr>
        <th><center>No.</center></th>
        <th><center>Judul</center></th>
        <th><center>Aksi</center></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $no = 1;
        foreach($artikel as $a){ 
      ?>
        <tr>
          <td><center><?php echo $no++; ?></center></td>
          <td><a href="#"><?php echo $a->judul ?></a></td>
          <td id="action">
            <center>
            <?php echo anchor('index.php/crud/edit/'.$a->id,'Edit'); ?>
            <?php echo anchor('index.php/crud/hapus/'.$a->id,'Hapus'); ?>
            </center>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>