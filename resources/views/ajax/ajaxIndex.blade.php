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
            <a href="#" class="btn btn-primary mb-3">Tambah Data+</a>
            <table class="table table-info">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <tr>
                        <td><?php echo $counter++; ?></td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>avatar.jpg</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i> Edit</a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $counter++; ?></td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>avatar.jpg</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i> Edit</a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <!-- Tambahkan baris tambahan jika Anda memiliki data lebih dari satu -->
                </tbody>
            </table>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
  <div>
@endsection