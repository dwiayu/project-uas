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
      <a class="navbar-brand" href="#">EEPROM</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="<?php echo site_url()?>/Portal">Home</a></li>
    <li><a href="<?php echo site_url()?>/News">News</a></li>
    <li><a href="<?php echo base_url('index.php/admin/tampilDivisi') ?>">Divisi</a></li>
    <li><a href="<?php echo site_url()?>/Prestasi">Prestasi</a></li>
    <li><a href="<?php echo site_url()?>/Angkatan">Angkatan</a></li>
    <li><a href="<?php echo base_url('index.php/login/logout') ?>">Logout</a></li>
    </ul>
    
  </div>
</nav>

<table cellpadding="10">
    <div class="table-responsive">
      <table class="table table-bordered">
    <thead>
      <tr class="danger">
        <td><b>No</td></b>
        <td><b>Nama Divisi</td></b>
        <td><b>Action</b></td>
        
      </tr>
    </thead>
    <?php $no=1; foreach ($Divisi as $key){
    ?>
    <tbody>
      <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $key['namaDivisi'] ?></td>
        <td><a href="<?php echo base_url('index.php/admin/updateDivisi/'.$key['idDivisi']) ?>"  class="btn btn-primary">Update</a></td>
                  <td><a href="<?php echo base_url('index.php/admin/hapusDivisi/' .$key['idDivisi']) ?>"  class="btn btn-danger">Delete</a></td>
                  <td><a href="<?php echo base_url('index.php/admin/detailDivisi/' .$key['idDivisi']) ?>"  class="btn btn-success">Detail</a></td>
        
    <?php $no++;} ?>
      </tr>
    </tbody>
    </table>

</body>
</html>
