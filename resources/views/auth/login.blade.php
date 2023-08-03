<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Log in</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

  <section>
    <div class="container">
      <div id="scene">
        <div class="layer">
          <img src="{{ asset('images/vw4.png') }}" alt=""  style="--i:4;">
        </div>
        <div class="layer">
          <img src="{{ asset('images/vw3.png') }}" alt=""  style="--i:3;">
        </div>
        <div class="layer">
          <img src="{{ asset('images/vw2.png') }}" alt=""  style="--i:2;">
        </div>
        <div class="layer">
          <img src="{{ asset('images/vw1.png') }}" alt=""  style="--i:1;">
        </div>
        <div class="layer">
          <img src="{{ asset('images/sunshine.png') }}" alt=""  style="--i:5;">
        </div>
      </div>
    </div>
  </section>


{{-- <div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ route('login') }}" class="h1">Admin Login</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login untuk masuk ke Dashboard</p>

      <form action="{{ route('login-proses') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
        <small>{{ $message }}</small>
        @enderror
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
        <small>{{ $message }}</small>
        @enderror
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <br>
      <p class="mb-0">
        Belum memiliki akun? <a href="{{ route('register') }}" class="text-center">Register</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box --> --}}

<script src="{{ asset('javascript/login.js') }}"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if ($message = Session::get('success'))
<script>
  Swal.fire('{{ $message }}')
</script>
@endif

@if ($message = Session::get('failed'))
<script>
  Swal.fire('{{ $message }}')
</script>
@endif

</body>
</html>
