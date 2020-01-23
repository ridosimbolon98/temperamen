<!DOCTYPE html>
<html>
<head>
	<title>login admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/asset_login/style1.css">
</head>
<body>
    <div class="konten">
        <center><img src="<?php echo base_url() ?>assets/asset_login/images/logoo.png" style="height: 50px; width: 50px;"></center>
        <div class="kepala">
            <div class="lock"></div>
            <center><h2 class="judul">Login Admin</h2></center>
        </div>
        <div class="artikel">
            <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
                <div class="grup">
                    <label for="email">Username</label>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="grup">
                    <input type="submit" value="Login">
                </div>
                <div class="kembali">
                    <center><a href="<?php echo base_url() ?>index.php">Kembali</a></center>
                </div>
            </form>
             
        </div>
    </div>
</body>
</html>