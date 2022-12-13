@extends('layouts.main')

@section('page', 'On Going Pemesanan')
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

        <div class="white-box">
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
                    @foreach ($bookings as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->car->nama }}</td>
                        <td>{{ $item->tujuan }}</td>
                        <td>{{ $item->durasi }}</td>
                        <td>{{ date("F jS, Y", strtotime($item->tgl_pengajuan)); }}</td>
                        <td class="d-flex">
                            <button id="btnSelesai" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#selesaiModal" value="{{ $item->id }}">
                                Selesai
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="selesaiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <form action="{{ route('update.ongoing') }}" method="post">
                        @csrf
                        <input id="inputBookingId" type="hidden" name="booking_id" required>
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Selesaikan Pemesanan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="col-form-label">Kilometer (KM) Akhir:</label>
                                <input name="kilometer_akhir" type="text" class="form-control"
                                    placeholder="Masukan kilometer akhir mobil" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">BBM Terpakai:</label>
                                <input name="bbm_terpakai" type="text" class="form-control"
                                    placeholder="Masukan BBM terpakai (liter)" required>
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
        $("#btnSelesai").click(function() {
            const bookingId =  $('#btnSelesai').val()
            $('#inputBookingId').val(bookingId);
        });

    });
</script>
@endsection
