@extends('layouts.main')

@section('page', 'Pemesanan')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3 py-2" data-bs-toggle="modal" data-bs-target="#tambah">
            Tambah
        </button>

        <div class="white-box">
            <div class="table-responsive">
                <table id="mainTable" class="table no-wrap data-table table-bordered">
                    <thead>
                        <tr>
                            <th class="border">No.</th>
                            <th class="border">Nama</th>
                            <th class="border">Mobil</th>
                            <th class="border">Tujuan</th>
                            <th class="border">Durasi</th>
                            <th class="border">Tgl Pengajuan</th>
                            <th class="border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pemesanan Kendaraan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Pemesan:</label>
                                <input type="text" class="form-control" id="recipient-name"
                                    placeholder="Masukan nama pemesan">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Pilih Mobil:</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nilai KM Awal:</label>
                                <input type="text" class="form-control" id="recipient-name"
                                    placeholder="Masukan nama pemesan">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>




    </div>
</div>
@endsection
