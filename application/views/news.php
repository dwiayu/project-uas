<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  
#kiri {
  position: fixed;
  top: 90px;
  left: 40px;
  width: 200px;
  border-right: 8px solid #aaa;
}
#kanan {
  margin: 0 40px 40px 280px;
}

</style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">EEPROM</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="<?php echo site_url()?>/portal">Home</a></li>
    <li><a href="<?php echo site_url()?>/news">News</a></li>
    <li><a href="<?php echo site_url()?>/divisi">Divisi</a></li>
    <li><a href="<?php echo site_url()?>/prestasi">Prestasi</a></li>
    <li><a href="<?php echo site_url()?>/angkatan">Angkatan</a></li>
    <li><a href="<?php echo site_url()?>/admin">Admin</a></li>
    <li><a href="<?php echo base_url('index.php/login/logout') ?>">Logout</a>
    
  </ul>
    
  </div>
  <div id="kiri">
  <legend>Breaking News</legend>
  <div>
      <font face="calibri">Jumlah Pendaftar: </font>
     
  </div>
</div>
</nav>
<div id="kanan">
<div class="w3-container w3-teal" align="center">
<?php $no=1; foreach ($Berita as $key) : ?>
 <h3> <?php echo $key['judulBerita'] ?></h3>
</div> 
</div>
<div class="w3-container" align="center"> 
<font face="calibri" ><?php echo $key['isi'] ?></font>
</div>
<br>
<div align="center">
<a href="<?php echo base_url('index.php/pendaftaran/')?>"  class="btn btn-info">Daftar</a>
<a href="<?php echo base_url('index.php/news/createPdf')?>"  class="btn btn-success">Unduh Form</a>
<?php $no++; endforeach ?>
</div>
</body>
</html>
