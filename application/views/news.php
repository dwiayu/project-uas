<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DwiAyu</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="<?php echo site_url()?>/Portal">Home</a></li>
    <li><a href="<?php echo site_url()?>/News">News</a></li>
    <li><a href="<?php echo site_url()?>/Divisi">Divisi</a></li>
    <li><a href="<?php echo site_url()?>/Prestasi">Prestasi</a></li>
    <li><a href="<?php echo site_url()?>/Angkatan">Angkatan</a></li>
    </ul>
    
  </div>
</nav>
<div class="w3-container w3-teal" align="center">
<?php $no=1; foreach ($Berita as $key) : ?>
 <h3> <?php echo $key['judulBerita'] ?></h3>
</div> 
<div class="w3-container" align="center"> 
<font face="calibri" ><?php echo $key['isi'] ?></font>
</div>
<?php $no++; endforeach ?>
</body>
</html>
