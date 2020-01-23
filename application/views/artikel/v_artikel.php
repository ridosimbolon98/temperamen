<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>temperamen artikel</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/asset_artikel/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url() ?>assets/asset_artikel/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/asset_artikel/css/blog.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/asset_artikel/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <img src="<?php echo base_url() ?>assets/asset_login/images/logoooo.png" style="height: 60px; width: 60px;"> <a class="blog-nav-item" href="<?php echo base_url() ?>index.php">Home</a>
          <a class="blog-nav-item active" href="<?php echo base_url() ?>index.php/Artikel/artikel">Artikel</a>
          <a class="blog-nav-item" href="<?php echo base_url() ?>index.php/konsultasi">Konsultasi</a>
          <a class="blog-nav-item" href="<?php echo base_url() ?>index.php/web/tentang">Tentang Kami</a>
          <a id="login" class="blog-nav-item" href="<?php echo base_url() ?>index.php/login">Login</a>
        </nav>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <?php foreach($artikel as $a){ ?>
                <!-- Post --> 
                <h2 class="blog-post-title"><?php echo $a->judul ?></h2>
                <p class="blog-post-meta"><?php echo $a->waktu ?> by <a href="https://www.instagram.com/rido.martupa/" style="text-decoration:none; font-style: italic;"><?php echo $writer; ?></a></p>
                <p><?php echo $a->isi ?></p>
                <p id="tag">#<?php echo $a->tag ?></p>
            <?php } ?>
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h3>About</h3>
            <p><em>Temperamen</em>, Dengan aplikasi berbasis web ini, maka setiap orang dapat mengetahui temperanmennya. Dengan mengetahui temperamennya, maka mereka dapat mengetahui SWOT dan solusi yang akan di sarankan sistem. </p>
          </div>
          <div class="sidebar-module">
            <h3>Artikel List</h3>
            <?php foreach($artikel as $a){ ?>
            <h4><a href="#"><?php echo $a->judul ?></a></h4>
            <?php } ?>
          </div>

          <div class="sidebar-module">
            <h3>Archives</h3>
            <ol class="list-unstyled">
              <li><a href="#">Desember 2018</a></li>
              <li><a href="#">November 2018</a></li>
              <li><a href="#">Oktober 2018</a></li>
              <li><a href="#">September 2018</a></li>
              <li><a href="#">Agustus 2018</a></li>
              <li><a href="#">Juli 2018</a></li>
              <li><a href="#">Juni 2018</a></li>
              <li><a href="#">Mei 2018</a></li>
              <li><a href="#">April 2018</a></li>
              <li><a href="#">Maret 2018</a></li>
              <li><a href="#">Februari 2018</a></li>
              <li><a href="#">Januari 2018</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h3>Elsewhere</h3>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>copyright 2018 &copy; ridosimbolon98@gmail.com</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>assets/asset_artikel/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url() ?>assets/asset_artikel/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
