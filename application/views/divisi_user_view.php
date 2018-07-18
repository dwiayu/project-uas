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
<style>
  

#kanan {
  margin: 0 60px 60px 60px;
}

</style>
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
    </div>

  </div>
</nav>
    <thead>
      <tbody>
      <tr class="danger">
      </tr>
    </thead>
    <tr class="warning">
    <?php $no=1; foreach ($Divisi_user as $key): ?>
            
 <?php $no++; endforeach ?>
      </tr>
    </tbody>
    </table>
<div id="kanan">
<?php $no=1; foreach ($Divisi_user as $key) : ?>
    <div class="w3-container w3-teal" style="background-color: green;" align="center">

 <h3><center><?php echo $key['namaDivisi'] ?></center> </h3>
</div> 
        <div class="container" align="center">
        <php $no=1; foreach ($Divisi_user as $key) : ?>
          <h3><center><?php echo $key['keterangan'] ?></center> </h3> 
           </div>
           
           <div class="container" align="center">
        <php $no=1; foreach ($Divisi_user as $key) : ?>
          <h3><center><img src="<?php echo base_url('assets/uploads/' .$key['gambar']) ?>" width="200" height="200"></center> </h3> 
           </div>

          <?php $no++; endforeach ?>
        </div>
</body>
</html>
