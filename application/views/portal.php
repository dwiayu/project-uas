<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
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
      <li class="active"><a href="<?php echo site_url()?>/Portal">Home</a></li>
      <li><a href="<?php echo site_url()?>/News">News</a></li>
      <li><a href="<?php echo site_url()?>/Divisi">Divisi</a></li>
      <li><a href="<?php echo site_url()?>/Prestasi">Prestasi</a></li>
      <li><a href="<?php echo site_url()?>/Angkatan">Angkatan</a></li>
      <li><a href="<?php echo site_url()?>/Admin">Admin</a></li>
      <li><a href="<?php echo base_url('index.php/login/logout') ?>">Logout</a>
      
    </ul>
    
  </div>
</nav>
  <div class="alert alert-success" align="center">
  <strong >Success!</strong> <?php echo $username ." sebagai ".$level ; ?>
</div>


<div class="panel panel-default" align="center">
  <div class="panel-heading"><font face="Bernard MT Condensed">Electronic Education And Programming Robotic Of Malang</font></div>
  <div class="panel-body">
    <img src="<?php echo base_url(); ?>assets/images/menang.jpg" class="img-thumbnail" alt="Cinque Terre"> 
  </div>
  <div class="jumbotron">
  <h1>Eeprom</h1>
  <p>Electronic Education Programming Robotic of Malang</p>
</div>
<div class="container">
  <p>EEPROM adalah salah satu komunitas robotik yang ada POLITEKNIK NEGERI MALANG. Komunitas ini 
    dirintis oleh mahasiswa jurusan elektro pada tanggal 1 Juni 2011 yang beranggotakan mahasiswa
    jurusan Teknik Elektro dan Teknik Informatika
  </p>
  
</div>
</div>
</body>
</html>
