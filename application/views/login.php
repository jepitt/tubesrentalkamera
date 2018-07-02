<!DOCTYPE html>
<html lang="en">
<head>
  <title>Persewaan Kamera</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylelogin.css'); ?>">
  
</head>
<body>

<h2>LOGIN FORM</h2>

<form class='login-form' action="check-login.php" method="post">
  <div class="flex-row">
    <input name="username" class='lf--input' placeholder='Username' type='text'>
  </div>
  <div class="flex-row">
    <input name="password" class='lf--input' placeholder='Password' type='password'>
  </div>
  <button class='lf--submit' type='submit'>LOGIN</button>
</form>


</body>
</html>