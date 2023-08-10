<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <title>Document</title>
</head>
<body>
  <div class="box">
    <span class="borderLine"></span>
    <form action="">
      <h2>Register</h2>
      <div class="inputBox">
        <input type="text" required="required">
        <span>Username</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" required="required">
        <span>Password</span>
        <i></i>
      </div>
      <div class="links">
        <a href="">Sudah mempunyai akun?</a>
        <a href="">Login</a>
      </div>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>