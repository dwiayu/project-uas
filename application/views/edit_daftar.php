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
    <li class="active"><a href="<?php echo site_url()?>/portal">Home</a></li>
    <li><a href="<?php echo base_url('index.php/admin/') ?>">Berita</a></li>
    <li><a href="<?php echo base_url('index.php/admin/tampilAngkatan') ?>">Angkatan</a></li>
    <li><a href="<?php echo base_url('index.php/admin/dataTable') ?>">Hasil Pendaftaran</a></li>
    <li><a href="<?php echo base_url('index.php/login/logout') ?>">Logout</a>
    </ul>
    
  </div>
</nav>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">


    <legend> Edit Pendaftaran </legend>
    <?php echo form_open_multipart('admin/updateDaftar/'.$this->uri->segment(3));?>
    <?php echo validation_errors();?>
    <div class="form-group">
      <label for="">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" 
      placeholder="Input Field" value="<?php echo $daftar[0]->nama ?>">
</div>
<div class="form-group">
      <label for="">NIM</label>
      <input type="text" class="form-control" id="nim" name="nim" 
      placeholder="Input Field" value="<?php echo $daftar[0]->nim ?>">
</div>
<div class="form-group">
  <label for="">Tempat Lahir</label>
  <input type="text" class="form-control" id="tempat" name="tempat" 
      placeholder="Input Field" value="<?php echo $daftar[0]->tempatLahir ?>">
   </div>
   <div class="form-group">
  <label for="">Tanggal Lahir</label>
  <input type="text" class="form-control" id="tgl" name="tgl" 
      placeholder="Input Field" value="<?php echo $daftar[0]->tanggalLahir ?>">
   </div>
   <div class="from-group">
   <label for="">Jenis Kelamin</label>
   <select name="kelamin" class="form-control">
    <option selected="selected" value="<?php echo $daftar[0]->jenisKelamin ?>">"<?php echo $daftar[0]->jenisKelamin ?>"</option>
    <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    </div>
   <div class="from-group">
   <label for="">Divisi</label>
   <select name="divisi" class="form-control">
    <option selected="selected" value="<?php echo $daftar[0]->divisi ?>">"<?php echo $daftar[0]->divisi ?>"</option>
    <option value="Mekanik">Mekanik</option>
        <option value="Elektrik">Elektrik</option>
        <option value="Software">Software</option>   
    </select>
    </div>
   <div class="form-group">
   <label for="">Jurusan</label>
   <select name="jurusan" class="form-control">
    <option selected="selected" value="<?php echo $daftar[0]->jurusan ?>">"<?php echo $daftar[0]->jurusan ?>"</option>
    <option value="Teknik Elektro">Teknik Elektro</option>
        <option value="Teknologi Informasi">Teknologi Informasi</option>   
    </select>
    </div>
   <div class="form-group">
  <label for="">Alamat</label>
  <input type="text" class="form-control" id="alamat" name="alamat" 
      placeholder="Input Field" value="<?php echo $daftar[0]->alamat ?>">
   </div>
   <div class="form-group">
  <label for="">Prestasi</label>
  <input type="text" class="form-control" id="prestasi" name="prestasi" 
      placeholder="Input Field" value="<?php echo $daftar[0]->prestasi ?>">
   </div>
   <div class="form-group">
  <label for="">No Hp</label>
  <input type="text" class="form-control" id="noHp" name="noHp" 
      placeholder="Input Field" value="<?php echo $daftar[0]->noHp ?>">
   </div>
   <div class="form-group">
  <label for="">Foto</label>
  <img src="<?php echo base_url('assets/uploads/' .$daftar[0]->foto) ?>" width=80, height=80>
  <input type="file" class="form-control" id="foto" name="foto">
   </div>
   <div class="from-group">
   <label for="">Keterangan</label>
   <select name="keterangan" class="form-control">
    <option selected="selected" value="<?php echo $daftar[0]->keterangan ?>">"<?php echo $daftar[0]->keterangan ?>"</option>
    <option value="terima">terima</option>
        <option value="reject">reject</option>
    </select>
    </div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close();?>
</div>
</body>
</html>
