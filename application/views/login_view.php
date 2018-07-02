<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    .login-form {
        width: 340px;
        margin: 50px auto;
    }
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
  <body style="background-color: #333333;">
    <div class="login-form">
    <form class="form-signin" method="post" action="<?php echo base_url('index.php/Login/loginAwal') ?>">
        <h2 class="text-center">Log in</h2>    
        <!-- <?php echo validation_errors(); ?> -->
        <div class="form-group">
            <?php echo validation_errors();?>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus>
        </div>
        <div class="form-group">
           <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="text-center"> <a href="<?php echo base_url('index.php/Login/register') ?>">Create an Account</a></div> 
    </form>
   
</div>
      <!-- <?php echo validation_errors(); ?>
      <label for="username" class="sr-only">Username</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus>
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      
          <a href="<?php echo base_url('index.php/Login/register') ?>" class="btn btn-lg btn-success btn-block">Registration</a>
          </form>
          <br><br><br>
          -->
        </div>
      </div>
    </div>
  </body>
</html>
