<html>
<head>
<title>Pendaftaran</title>
</head>

<body>
<?php echo form_open_multipart('pendaftaran/');?>
    <legend> Form Pendaftaran</legend>
    <?php echo validation_errors(); ?>
<form method="post">
<table border="0">

<tr>
    <td> Nama Mahasiswa </td>
    <td> : </td>
    <td colspan="7"> <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Field"> </td>
</tr>
<tr>
    <td> NIM </td>
    <td> : </td>
    <td colspan="7"> <input type="text" name="nim"/></td>
</tr>
<tr>
    <td> Tempat Lahir </td>
    <td> : </td>
    <td colspan="7"> <input type="text" name="tempat" /></td>
</tr>
<tr>
    <td> Tanggal Lahir </td>
    <td> : </td>
    <td> <input type="date" name="tanggal" size="10"/> </td>
    
      
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
                    <option value="2">Elektrik </option></select></td>
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
    <td colspan="7"> <input type="text" name="noHp" size="54"/> </td>
</tr>
<tr>
    <td> Alamat </td>
    <td> : </td>
    <td colspan="7"><textarea name="alamat" cols="41" rows="7"></textarea></td>
</tr>
<tr>
    <td> Prestasi </td>
    <td> : </td>
    <td colspan="7"><textarea name="prestasi" cols="41" rows="7"></textarea></td>
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
