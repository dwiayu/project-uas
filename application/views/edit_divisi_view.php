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
      <a class="navbar-brand" href="#">EEPROM</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="<?php echo site_url()?>/portal">Home</a></li>
    <li><a href="<?php echo base_url('index.php/admin/') ?>">Berita</a></li>
    <li><a href="<?php echo base_url('index.php/admin/tampilDivisi') ?>">Divisi</a></li>
    <li><a href="<?php echo base_url('index.php/admin/tampilAngkatan') ?>">Angkatan</a></li>
    <li><a href="<?php echo base_url('index.php/admin/dataTable') ?>">Hasil Pendaftaran</a></li>
    <li><a href="<?php echo base_url('index.php/login/logout') ?>">Logout</a>
    </ul>
    
  </div>
</nav>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_open_multipart('admin/UpdateDivisi/' .$this->uri->segment(3));?>
    <legend> Edit Divisi </legend>
    <?php echo validation_errors();?>
    <div class="form-group">
      <label for="">Nama Divisi</label>
      <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Input 
      Field" value="<?php echo $Divisi[0]->namaDivisi ?>">
</div>
<div class="form-group">
      <label for="">Keterangan </label><br>
      <textarea id="keterangan" name="keterangan" placeholder="Input Field"><?php echo $Divisi[0]->keterangan ?>"></textarea>
</div>
<div class="form-group">
      <label for="">Gambar </label>
      <img src="<?php echo base_url('assets/uploads/'.$Divisi[0]->gambar) ?>" width=80, height=80>
      <input type="file" name="userfile">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close();?>
</body>
</html>
