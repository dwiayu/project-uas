<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
    background-image: url("<?php echo base_url();?>assets/images/robot1.jpg");
    background-repeat: no-repeat;
    background-position:  bottom left ;
    background-size: 900px;
    margin-bottom: 10px;
    margin-left : 0px;
    background-attachment: fixed;
}
</style>
</style>
</head>
<body>
<div id="body">
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">
          <img alt="Brand" src="robot.jpg" heigh="100" width="100" class="img-circle" alt="Cinque Terre">
        </a>
      </div>
    </div>
  </nav>
<div class="container" align="center">
<?php echo form_open_multipart('Login/cekLogin');?>
    <form action="login.php?op=in"method="POST">
    <table cellpadding="0" cellspacing="5" bgcolor="#F8F8FF" width="50%" align="center">
        <tr height="36" bgcolor="#FFF8DC" ><br><br><br><br><br><br><br><br>
            <th colspan="5" align="center"> Login Your Authorization</th>
        </tr>
        <?php echo validation_errors(); ?>
        <tr>
            <td>
                <table width="100%" align="center">
                <tr>
                    <td><img src="<?php echo base_url(); ?>assets/images/robot.jpg" width="100" height="100"/></td>
                    <td style="vertical-align: top">
                    <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1">User</span>
                         <input type="text" name="usernameL" id="usernameL" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                                        </div>
                    <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1">Password</span>
                        <input type="password" name="passwordL" id="passwordL" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
                    </div>
                    <button type="submit" input style="float:left" value="LOGIN" class="btn btn-default navbar-btn" align="center">Sign in</button>
                    <?php echo form_close();?>
                                       
                </tr>
                <tr height="10">
                    <td></td>
                    <td></td>
                </tr>
                </table>
            </td>
        </tr>
      </table>
      </form>
      
</div>
<div align="center">
    
                      <h5>Anda belum punya akun? </h5>
                    <a href="<?php echo base_url('index.php/Daftar/') ?>">Sign Up</a>
                    </div> 
</div>                    
</body>
</html>

