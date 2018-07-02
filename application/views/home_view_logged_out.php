<!DOCTYPE html>
<html lang="en">
<head>

  <title>Persewaan Kamera</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylemember.css'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
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
    opacity:0.9;
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

/* foto team */
.person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.8;
}
.person:hover {
    border-color: #dddddd;
    opacity: 0.9;
}
</style>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/logofix.png'); ?>"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">HOME</a></li>
        <li><a href="#price">PRICELIST</a></li>
        <li><a href="<?php echo base_url('index.php/Login') ?>">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="home"></div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo base_url('assets/images/60d.jpg'); ?>" width="100%" height="100%">
        <div class="carousel-caption">
          <h3>Canon EOS 60D</h3>
          <p>The Canon EOS 60D is an 18.1 megapixels semi-pro digital single-lens reflex camera made by Canon.</p>
        </div>      
      </div>

      <div class="item">
        <img src="<?php echo base_url('assets/images/7d.jpg'); ?>" width="100%" height="100%">
        <div class="carousel-caption">
          <h3>Canon EOS 7D</h3>
          <p>The EOS 7D features a Canon-designed 18.0 Megapixel APS-C size CMOS sensor.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="<?php echo base_url('assets/images/1d.jpg'); ?>" width="100%" height="100%">
        <div class="carousel-caption">
          <h3>Canon EOS 1D Mark II</h3>
          <p>Canon EOS 1D X Mark II DSLR Camera (Body Only) features 20.2MP Full-Frame CMOS Sensor, Dual DIGIC 6+ Image Processors.</p>
        </div>      
      </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Team -->

<div class="container-fluid text-center">
  <br><br>
  <h3>THE TEAM</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>Muhammad Hafidz Ilham</strong></p><br>
      <a href="#ket-jepitt" data-toggle="collapse">
      <img src="<?php echo base_url('assets/images/jepitt.png'); ?>" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
    <div id="ket-jepitt" class="collapse">
        <p>Muhammad Hafidz Ilham</p>
        <p>1641720085</p>
        <p>Absent Number 20</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>Muhammad Haidar Hammam</strong></p><br>
      <a href="#ket-hammam" data-toggle="collapse">
      <img src="<?php echo base_url('assets/images/hammam.png'); ?>" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
    <div id="ket-hammam" class="collapse">
        <p>Muhammad Haidar Hammam</p>
        <p>1641720129</p>
        <p>Absent Number 21</p>
      </div>
    </div>
  </div>
  <br><br>
</div>

<!-- Mesen -->
<div class="container-fluid text-center" style="background: #2d2d30;">
  <br><br>
<div id="price" class="row text-center">
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="<?php echo base_url('assets/images/60dsmall.jpg'); ?>" alt="60d" width="70%" height="70%">
      <p><strong>Canon EOS 60D</strong></p>
      <p>Rp. 100.000 / 24 jam</p>
      <button class="btn" onclick="harusLogin()">Sewa</button>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="<?php echo base_url('assets/images/7dsmall.jpg'); ?>" alt="7d" width="70%" height="70%">
      <p><strong>Canon EOS 7D</strong></p>
      <p>Rp. 200.000 / 24 jam</p>
      <button class="btn" onclick="harusLogin()">Sewa</button>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="<?php echo base_url('assets/images/1dsmall.jpg'); ?>" alt="1d" width="70%" height="70%">
      <p><strong>Canon EOS 1D Mark II</strong></p>
      <p>Rp. 800.000 / 24 jam</p>
      <button class="btn" onclick="harusLogin()">Sewa</button>
    </div>
  </div>
</div>
<br>
</div>

<script>
function harusLogin() {
    alert("Anda harus login terlebih dahulu!");
}
</script>

<!-- Pop up sewa -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Form Sewa</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="sewa.php" method="post">
          <div class="form-group">
            <label><span class="glyphicon glyphicon-user"></span> Nama</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label><span class="glyphicon glyphicon-earphone"></span> Nomor HP</label>
            <input type="text" class="form-control" name="noHP">
          </div>
          <div class="form-group">
            <label><span class="glyphicon glyphicon-camera"></span> Nama Camera</label>
              <select name="kamera" class="form-control">
                <option value="Canon EOS 60D">Canon EOS 60D</option>
                <option value="Canon EOS 7D">Canon EOS 7D</option>
                <option value="Canon EOS 1 Mark II">Canon EOS 1 Mark II</option>
              </select>
          </div>
          <div class="form-group">
            <label><span class="glyphicon glyphicon-calendar"></span> Tanggal Sewa</label>
            <input type="date" class="form-control" name="tglsewa">
          </div>
          <div class="form-group">
            <label><span class="glyphicon glyphicon-calendar"></span> Tanggal Kembali</label>
            <input type="date" class="form-control" name="tglkembali">
          </div>
          <button type="submit" class="btn btn-block" onclick="alert('Data Anda Berhasil Disimpan!')" name="sewa">Sewa  
            <span class="glyphicon glyphicon-ok"></span>
          </button>
        </form>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
      </div>
    </div>
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

</body>
</html>
