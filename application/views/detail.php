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
      <li class="active"><a href="<?php echo site_url()?>/home">Home</a></li>
    </ul>
    
  </div>
</nav>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="table-responsive">
<h1> Detail Angkatan</h1>
<a href="<?php echo base_url('index.php/Admin/tambahDataAngkatan')?>"  class="btn btn-info">Tambah</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <td> No </td>
        <td> Nama Angkatan </td>
        <td> Divisi </td>
        <td>Action</td>
         
      </tr>
    </thead>
    <tbody>
    <tr>
               <?php $no=1; foreach ($dataAngkatan as $key) : ?>
                  <td><?php echo $no ?></td><br>
                  <td><?php echo $key['nm'] ?></td>
                  <td><?php echo $key['nd'] ?></td>
                  <td><a href="<?php echo base_url('index.php/admin/hapusDataAngkatan/' .$key['id']) ?>"  class="btn btn-danger">Delete</a></td>
                  

            </tr>
            <?php $no++; endforeach ?>
   </table>
</div>
</div>
</body>   
</html>
