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
        <li><a href="index.php">HOME</a></li>
        <li><a href="sewa.php">TRANSAKSI</a></li>
        <li><a href="<?php echo base_url('index.php/Login/logout') ?>">LOGOUT</a></li>
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
</script>

<div id="home"></div>

<div class="container">
  <h2>Selamat Datang Admin di Halaman Home</h2>
  <p>Berikut ini adalah data anggota</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID User</th>
        <th>Username</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Level</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- <?php foreach ($list_user as $key => $value) {?>
              
            <tr>
              <td><?php echo $value['id'] ?></td>
              <td><?php echo $value['username'] ?></td>
              <td><?php echo $value['fullname'] ?></td>
              <td><?php echo $value['email'] ?></td>
              <td><?php echo $value['level'] ?></td>

              <td>
                <a href="<?php echo base_url("index.php/pendidikan/id/".$value['idPegawai']) ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-list-alt"></span></a>
                <a href="<?php echo base_url("index.php/pegawai/update/".$value['idPegawai']) ?>" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="<?php echo base_url("index.php/pegawai/delete/".$value['idPegawai']) ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
              </td>


            </tr>
            <?php } ?> -->
    </tbody>
  </table>


<!-- HAPUS MODAL-->
    <div class="modal fade" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <b>Anda yakin ingin menghapus data ini ?</b><br><br>
                    <a class="btn btn-danger btn-ok"> Hapus</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                </div>
            </div>
        </div>
    </div>


  <script type="text/javascript">
    $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
  </script>
<!-- AKHIR HAPUS MODAL-->
  <button class="btn" data-toggle="modal" data-target="#tambahMember"><span class="glyphicon glyphicon-plus"></span> Tambah Member</button>
  <div class="modal fade" id="tambahMember" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-plus"></span> Tambah Member</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="user/create" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username">
          </div>
          <div class="form-group">
            <label>Fullname</label>
            <input type="text" class="form-control" name="fullname">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <label>Level</label>
            <span style="display:inline-block; width: 20px;"></span>
              <label class="radio-inline"><input type="radio" name="jenis" value="admin" checked="true">Admin</label>
              <label class="radio-inline"><input type="radio" name="jenis" value="member">User</label>
          </div>
          <button type="submit" class="btn btn-block" onclick="">Tambah</button>
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
</div>


<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Muhammad Hafidz Ilham, 2018</p> 
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
