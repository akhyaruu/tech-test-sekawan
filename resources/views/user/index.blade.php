@extends('layouts.main')

@section('page', 'Persetujuan Pemesanan')
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
                        <td>{{ $item->nama_peminjam }}</td>
                        <td>{{ $item->nama_mobil }}</td>
                        <td>{{ $item->tujuan }}</td>
                        <td>{{ $item->durasi }}</td>
                        <td>{{ date("F jS, Y", strtotime($item->tgl_pengajuan)); }}</td>
                        <td class="d-flex">
                            <form action="{{ route('update.persetujuan') }}" method="post">
                                @csrf
                                <input type="hidden" name="booking_id" value="{{ $item->booking_id }}">
                                <button
                                    onclick="return confirm('Apakah kamu yakin ingin menyetujui pemesanan kendaraan berikut?')"
                                    type="submit" class="btn btn-primary">Setuju</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
