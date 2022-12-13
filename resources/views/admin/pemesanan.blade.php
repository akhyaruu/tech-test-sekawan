@extends('layouts.main')

@section('page', 'Pemesanan')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <x-alert type="danger" :message="$error" />
        @endforeach
        @elseif (session('error'))
        <x-alert type="danger" :message="session('error')" />
        @elseif (session('success'))
        <x-alert type="success" :message="session('success')" />
        @endif

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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->car->nama }}</td>
                            <td>{{ $item->tujuan }}</td>
                            <td>{{ $item->durasi }}</td>
                            <td>{{ date("F jS, Y", strtotime($item->tgl_pengajuan)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('store.pemesanan') }}" method="post">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pemesanan Kendaraan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label class="col-form-label">Nama Pemesan:</label>
                                <input name="nama" type="text" class="form-control" placeholder="Masukan nama pemesan"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Pilih Mobil:</label>
                                <select name="mobil_id" class="form-select" aria-label="Default select example"
                                    required>
                                    <option selected disabled>Pilih mobil</option>
                                    @foreach ($cars as $item)
                                    <!-- dapatkan mobil yg belum disewa -->
                                    @if ($item->id != $item->mobil_id)
                                    <option value="{{ $item->id }}">{{ $item->nama }}: {{ $item->warna }}, {{
                                        $item->cc_mesin }} cc, tahun {{ $item->tahun_keluar }}
                                    </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Nilai KM Awal:</label>
                                <input name="kilometer_awal" type="number" step="0.01" class="form-control"
                                    placeholder="Masukan nilai kilometer awal" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Tujuan:</label>
                                <input name="tujuan" type="text" class="form-control"
                                    placeholder="Masukan tujuan destinasi" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Durasi:</label>
                                <div class="row">
                                    <div class="col-md-9">
                                        <input name="durasi" type="number" class="form-control"
                                            placeholder="Masukan durasi sewa" required>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="tipe_durasi" class="form-select" required>
                                            <option value="Menit">Menit</option>
                                            <option value="Jam">Jam</option>
                                            <option value="Hari">Hari</option>
                                            <option value="Minggu">Minggu</option>
                                            <option value="Bulan">Bulan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Pihak Penyetuju:</label>
                                <select class="js-example-basic-multiple" name="user_id[]" style="width: 100%;" multiple
                                    required>
                                    @foreach ($users as $user)
                                    @unless ($user->role->nama == 'Admin')
                                    <option value="{{ $user->id }}">{{ $user->nama }} - {{ $user->role->nama }}</option>
                                    @endunless
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            width: 'resolve'
        });
    });
</script>
@endsection
