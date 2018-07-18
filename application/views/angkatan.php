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
</nav>
<div class="container">
 

</div>
<div class="container">
  <h2>Daftar Angkatan</h2>
  <a href="<?php echo base_url('index.php/admin/tambahAngkatan')?>"  class="btn btn-info">Tambah</a>
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
    <?php $no=1; foreach ($Angkatan as $key) : ?>
                  <td><?php echo $no ?></td><br>
                  <td><?php echo $key['angkatan'] ?></td>
                  <td><?php echo $key['tahunJabatan'] ?></td>
                  <td><a href="<?php echo base_url('index.php/admin/updateAngkatan/'.$key['idAngkatan']) ?>"  class="btn btn-primary">Update</a></td>
                  <td><a href="<?php echo base_url('index.php/admin/hapusAngkatan/' .$key['idAngkatan']) ?>"  class="btn btn-danger">Delete</a></td>
                  <td><a href="<?php echo base_url('index.php/admin/detailAngkatan/' .$key['idAngkatan']) ?>"  class="btn btn-success">Detail</a></td>
    </tr>
            <?php $no++; endforeach ?>
    </tbody>
  </table>
</div>
</body>
</html>