<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    </head>
    <body class="bg-light">
    <main class="container">    
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <form id="filterForm">
                <div class="mb-3">
                    <label for="filter" class="form-label">Filter:</label>
                    <div class="form-check">
                        <input class="form-check-input filter-checkbox" type="checkbox" name="Zakat" id="Zakat">
                        <label class="form-check-label" for="Zakat">Zakat</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input filter-checkbox" type="checkbox" name="Grace" id="Grace">
                        <label class="form-check-label" for="Grace">Grace</label>
                    </div>
                    <!-- Tambahkan lebih banyak checkbox sesuai kebutuhan -->
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Filter">
                    </div>
                </div>
            </form>
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                    <a href='' class="btn btn-primary button-tambah">+ Tambah Data</a>
                </div>
                <table class="table" id="myTable">
                    <thead>
                        <tr class="bg-info">
                            <th class="col-md-1">No</th>
                            <th class="col-md-1">sumber_dana</th>
                            <th class="col-md-1">program</th>
                            <th class="col-md-1">keterangan</th>
                            <th class="col-md-1">Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        <!-- AKHIR DATA -->
    </main>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <!-- START FORM -->
        <div class="alert alert-danger d-none"></div>
        <div class="alert alert-success d-none"></div>
        <div class="mb-3 row">
            <label for="sumber_dana" class="col-sm-2 col-form-label">sumber_dana</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='sumber_dana' id="sumber_dana">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="program" class="col-sm-2 col-form-label">program</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='program' id="program">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='keterangan' id="keterangan">
            </div>
        </div>
        <!-- AKHIR FORM -->
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary tombol-simpan">Simpan</button>
        </div>
    </div>
    </div>
</div>
    @include('sumberDana.script')
    </body>
</html>