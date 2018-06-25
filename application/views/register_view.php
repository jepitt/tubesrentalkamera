<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTER</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image:url('images.jpg')">
    <div class="container-fluid">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <ul class="nav navbar-nav">
               <li>
                <a href="<?php echo site_url();?>/Home">Rental Kamera</a>
              </li>
              <li class="active">
                <a href="<?php echo site_url();?>/Home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
              </li>
             <!--  <li>
               <a href="<?php echo site_url();?>/About">About</a>
             </li>
             <li>
               <a href="<?php echo site_url();?>/Contact">Contact</a>
             </li> -->
            </ul>
          </div>
        </nav>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <br><br><br><form class="form-signin" method="post" action="<?php echo base_url('index.php/Login/register') ?>">
             <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <div class="panel-default">
                 <div class="panel-heading">
           <h2 class="text-center" style="color: black;">REGISTRASI</h2>
           </div>
      <?php echo validation_errors(); ?>
      <label for="username" class="sr-only">Username</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus>
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
      <select name="level" id="level" class="form-control" style="height: 45px;">
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
      <br><button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>

    <a href="<?php echo base_url('index.php/Login') ?>" class="btn btn-lg btn-secondary btn-success">Kembali</a>
    </form>
 <br><br><br>
     <div class="container-fluid">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <ul class="nav navbar-nav">
             <li>
                <a href="<?php echo site_url();?>/Home"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span>Rental Kamera</a>
              </li>
              <li class="active">
                <a href="<?php echo site_url();?>/Home"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 081334358714</a>
              </li>
              <!-- <li>
                <a href="<?php echo site_url();?>/About">About</a>
              </li>
              <li>
                <a href="<?php echo site_url();?>/Contact">Contact</a>
              </li> -->
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </body>
</html>
<!-- <style>
  html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style> -->