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
    <li class="navbar-brand"><a href="<?php echo base_url('index.php/Depan/') ?>">Home</a></li>
      <li class="navbar-brand"><a href="<?php echo base_url('index.php/Login/') ?>">Login</a></li>
    </ul>
    
  </div>
</nav>
<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <?php echo form_open_multipart('daftar/create');?>
    <legend>Form Registrasi</legend>
    <?php echo validation_errors(); ?>
    <div class="form-group">
      <label for="">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Field">
</div>
    <div class="form-group">
      <label for="">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Input Field">
</div>
<div class="form-group">
      <label for="">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Input Field">
</div>
<div class="form-group">
      <label for="">Confirm Password</label>
      <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Input Field">
</div>
<div class="form-group">
      <label for="">jurusan</label>
      <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Input Field">
</div>
<div class="form-group">
      <label for="">Universitas</label>
      <input type="text" class="form-control" id="universitas" name="universitas" placeholder="Input Field">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close();?>
</div>
</div>    
</body>
</html>
