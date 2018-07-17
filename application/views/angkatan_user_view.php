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
    <li class="active"><a href="<?php echo site_url()?>/home">Home</a></li>
      <li><a href="<?php echo site_url()?>/news">News</a></li>
      <li><a href="<?php echo site_url()?>/divisi_user">Divisi</a></li>
      <li><a href="<?php echo site_url()?>/angkatan_user">Angkatan</a></li>
       <li><a href="<?php echo site_url()?>/admin">Admin</a></li>
      <li><a href="<?php echo base_url('index.php/login/logout') ?>">Logout</a></li>
    </ul>
</nav>
<div class="container">

</div>
<div class="container">
  <h2><center>Daftar Angkatan</center></h2>
    <table class="table">
    <thead align="center">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tahun Jabatan</th>
        <th>Action</th>
        </tr>
    </thead>
    <tr class="warning">
    <?php $no=1; foreach ($Angkatan_user as $key) : ?>
                 <td><?php echo $no ?></td><br>
                  <td><?php echo $key['angkatan'] ?></td>
                  <td><?php echo $key['tahunJabatan'] ?></td>
                  <td><a href="<?php echo base_url('index.php/angkatan_user/detail_user/' .$key['idAngkatan']) ?>"  class="btn btn-success">Detail</a></td>
    </tr>
            <?php $no++; endforeach ?>
    </tbody>
  </table>
</div>
</body>
</html>