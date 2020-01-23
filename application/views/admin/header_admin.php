<?php 
  if($_SESSION['status']!="login"){
    header("location:../login/?pesan=belum_login");
  }
?>

<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <title>Admin Temperamen</title>
</head>
<body>
    
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top py-3">
    <div class="container">
      <a href="<?php echo base_url() ?>index.php" class="navbar-brand">
        <h3 class="d-inline align-middle">Admin Temperamen</h3>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="<?php echo base_url() ?>index.php/admin" class="nav-link">Home Admin</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_Url('index.php/crud/tambah'); ?>" class="nav-link">Tambah Artikel</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-user"></i> <?php echo $this->session->userdata("nama"); ?></a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>index.php/login/logout" class="nav-link"><i class="fa fa-user-times"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>  
  
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/navbar-fixed.js"></script>

  