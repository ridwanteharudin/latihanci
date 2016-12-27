<html>
    <head>
        <title>Halaman Admin</title>
    </head>
    <body>
        <h1>Selamat Datang</h1>
        <h3><?php echo $this->session->userdata('userId');?></h3>
        <a href="<?php echo base_url('home/Logout');?>">Logout</a>
    </body>
</html>