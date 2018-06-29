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
      <li><a href="<?php echo base_url('index.php/admin/index') ?>">Home</a></li>
      <li><a href="<?php echo base_url('index.php/admin/tampilAngkatan') ?>">Angkatan</a></li>
    </ul>
    
  </div>
</nav>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_open_multipart('Admin/tambahDataAngkatan');?>
    <legend> Tambah Data Angkatan </legend>
    <?php echo validation_errors(); ?>
    <div class="form-group">
      <label for="">Nama Lengkap</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Field">
</div>
<div class="form-group">
      <label for="">Id Angkatan </label>
      <input type="text" class="form-control" id="idAngkatan" name="idAngkatan" placeholder="Input Field">
</div>
<div class="form-group">
      <label for="">Id Divisi </label>
      <input type="text" class="form-control" id="idDivisi" name="idDivisi" placeholder="Input Field">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close();?>
</div>
</body>
</html>
