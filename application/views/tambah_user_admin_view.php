<!DOCTYPE html>
<html lang="en">
<head>

  <title>Persewaan Kamera</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styleadmin.css'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="ajax.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<style type="text/css">
  .pull-right{
    display:block;
  }
</style>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        
      </button>
      <a class="navbar-brand" href="index.php"><img src="<?php echo base_url('assets/images/logofix.png'); ?>"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('index.php/admin') ?>">HOME</a></li>
        <!-- <li><a href="<?php echo base_url('index.php/transaksi') ?>">TRANSAKSI</a></li> -->
        <li><a href="#" onclick="tidakboleh()">TRANSAKSI</a></li>
        <li><a href="<?php echo base_url('index.php/barang') ?>">BARANG</a></li>
      </ul>
    </div>
  </div>
</nav>

<script type="text/javascript">
function confirm() {
var msg;
msg= "Apakah Mang Kemed Yakin Akan Menghapus Data ? " ;
var agree=confirm(msg);
if (agree)
return true;
else
return false;
}

function tidakboleh(){
  alert("Klik tombol back jika ingin kembali ke halaman lain!");
}
</script>

<div id="home"></div>

<div class="container">
            
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <h2><center>Tambah User</center></h2>
    <br>    
      <form class="form-signin" method="post" action="<?php echo base_url('index.php/admin/register') ?>">
        <?php if (validation_errors() == true) {?>
        <div class="alert alert-danger" role="alert">
        <center><span class="glyphicon glyphicon-exclamation-sign"></span>Error!</center><hr>
        <?php echo validation_errors();?>
        </div>
        <?php } ?>
        <div class="input-group">
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-user"></span>
            </span>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus>
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-envelope"></span>
            </span>
            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" autofocus>
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-pencil"></span>
            </span>
            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Full Name" autofocus>
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">
              <span class="glyphicon glyphicon-lock"></span>
            </span>
           <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon">
              <span class="glyphicon glyphicon-th-list"></span>
            </span>
        <select  name="level" id="level" class="form-control" style="">
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
    </div>
    <br>
      <div style="float:left;"><a href="<?php echo base_url("index.php/admin") ?>" class="btn"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></div>
      <div style="float:right;"><button class="btn pull-right" type="submit"><span class="glyphicon glyphicon-save"></span> Submit</button></div>
    </div>
    </form>
    
    </div>
  </div>

<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Muhammad Hafidz Ilham | Muhammad Haidar Hammam</p> 
</footer>


<script>
$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  if (this.hash !== "") {

    event.preventDefault();
    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      window.location.hash = hash;
      });
    }
  });
})

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>

<style>
  .navbar {
    height: 75px;
    margin-bottom: 0;
    padding-right: 100px;
    padding-left: 100px;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.8;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
    margin-top: 12px;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}
</style>
</body>
</html>
