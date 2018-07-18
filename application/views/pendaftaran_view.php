<html>
<head>
<title>Pendaftaran</title>
</head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DwiAyu</a>
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
</nav>

<?php echo form_open_multipart('pendaftaran/daftar');?>
    <legend> Form Pendaftaran</legend>
    <?php echo validation_errors(); ?>
<?php foreach($nm as $key): ?>
<table border="0">
<tr>
    <td> Nama Mahasiswa </td>
    <td> : </td>
    <td colspan="7"> <input type="text" readonly class="form-control" id="nama" name="nama" value="<?php echo $key['nama'] ?>"> </td>
</tr>
<?php  endforeach?>
<tr>
    <td> NIM </td>
    <td> : </td>
    <td colspan="7"> <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM"> </td>
</tr>
<tr>
    <td> Tempat Lahir </td>
    <td> : </td>
    <td colspan="7"> <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat Lahir"> </td>
</tr>
<tr>
    <td> Tanggal Lahir </td>
    <td> : </td>
    <td><input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Lahir" size="10"> </td> 
</tr>
<tr>
    <td> Jenis Kelamin </td>
    <td> : </td>
    <td colspan="7"> <select name="kelamin">
                    <option value="1" selected="selected"> - </option>
                    <option value="2"> Laki-Laki </option>
                    <option value="3"> Perempuan </option></select></td>
</tr>
<tr>
    <td> Divisi </td>
    <td> : </td>
    <td colspan="7"> <select name="divisi">
                    <option value="1" selected="selected"> - </option>
                    <option value="2">Mekanik </option>
                    <option value="3"> Software</option>
                    <option value="4">Elektrik </option></select></td>
</tr>
<tr>
    <td> Jurusan </td>
    <td> : </td>
    <td colspan="7"> <select name="jurusan">
                    <option value="1" selected="selected"> - </option>
                    <option value="2">Teknologi Informasi </option>
                    <option value="3">Teknik Elektro</option></select></td>
</tr>
<tr>
    <td> Ho Hp </td>
    <td> : </td>
    <td><input type="text" class="form-control" id="noHp" name="noHp" placeholder="No Handphone"> </td>
</tr>
<tr>
    <td> Alamat </td>
    <td> : </td>
    <td><textarea class="form-control" id="alamat" name="alamat" rows="7"></textarea> </td>
</tr>
<tr>
    <td> Prestasi </td>
    <td> : </td>
    <td><textarea class="form-control" id="prestasi" name="prestasi" placeholder="Prestasi" ></textarea> </td>
</tr>
<tr>

      <td><label for="">Foto</label></td>
        <td>:</td>
     <td> <input type="file" name="userfile" size="20"></td>

</tr>
<tr>
    <td colspan="9" align="right"><button type="submit" class="btn btn-primary">Submit</button></td>
    
</tr>
</table>
</body>
