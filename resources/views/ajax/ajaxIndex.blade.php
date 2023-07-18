@extends('layout.main')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"><b>Dashboard</b></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="container">
            <h2>Tabel Ajax</h2>
            <button href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahUser">Tambah Data+</button>
            <div class="card-body" id="show_all_users">
              <h1 class="text-center text-secondary my-5">Loading...</h1>
            </div>
        </div>
        
        <div class="modal fade" id="tambahUser" tabindex="-1" role="dialog" aria-labelledby="tambahUser" data-bs-backdrop="static" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahUser">Tambah User</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="#" method="POST" id="form_tambah_User" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 bg-light">
                  <div class="row">
                    <div class="col-lg">
                      <label for="fname">First Name</label>
                      <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="col-lg">
                      <label for="lname">Last Name</label>
                      <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="my-2">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="my-2">
                      <label for="avatar">Select Avatar</label>
                      <input type="file" name="avatar" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <button type="submit" id="tombol_tambah_user" class="btn btn-primary">Tambah User</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection