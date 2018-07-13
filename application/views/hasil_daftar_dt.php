<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datatables.min.css">
  
  
</head>
<body>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<?php echo form_open_multipart('Admin/updateDaftar');?>
    <h1>Daftar List Peserta</h1>
    <div class="table-responsive">
        <table class="table table-hover" id="example">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Divisi</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Prestasi</th>
                    <th>No-Hp</th>
                    <th>Keterangan</th>
                    <th>Foto</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($pendaftaran_list as $key){ ?>
            <tr>
                <td><?php echo $key->nama?></td>
                <td><?php echo $key->nim?></td>
                <td><?php echo $key->tempatLahir?></td>
                <td><?php echo $key->tanggalLahir?></td>
                <td><?php echo $key->jenisKelamin?></td>
                <td><?php echo $key->divisi?></td>
                <td><?php echo $key->jurusan?></td>
                <td><?php echo $key->alamat?></td>
                <td><?php echo $key->prestasi?></td>
                <td><?php echo $key->noHp?></td>
                <td><?php echo $key->keterangan?></td>
                <td><img src="<?php echo base_url('assets/uploads/' .$key->foto) ?>" width="80" height="80"></td>
                <td> 
                <a href="<?php echo base_url('index.php/admin/hapusDataTable/' .$key->idPendaftaran) ?>"  class="btn btn-danger">Delete</a>
                <a href="<?php echo base_url('index.php/admin/updateDaftar/'.$key->idPendaftaran) ?>"  class="btn btn-info">Update</a>
                <a href="<?php echo base_url('index.php/admin/simpanHasil/' .$key->idPendaftaran) ?>"  class="btn btn-success">Accept</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('')?>assets/jq/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('')?>assets/datatables.min.js"></script>
<script src="<?php echo base_url('')?>assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#example').DataTable();
});
</script>
</body>
</html>