<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingApproval;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function indexPemesanan()
    {
        $mobil = Car::latest()->get();
        $users = User::latest()->get();
        return view('admin.pemesanan', compact('mobil', 'users'));
    }

    public function storePemesanan(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|string',
            'mobil_id' => 'required|string',
            'kilometer_awal' => 'required',
            'tujuan' => 'required|string',
        ]);

        if (count($request->user_id) < 2) {
            return back()->with('error',  'Pihak penyetuju minimal berjumlah 2 orang');
        }

        $booking = Booking::create($validate);
        $booking->durasi = $request->durasi . ' ' . $request->tipe_durasi;
        $booking->tgl_pengajuan = now();
        $booking->save();

        foreach ($request->user_id as $item) {
            BookingApproval::create([
                'booking_id' => $booking->id,
                'user_id' => $item,
            ]);
        }

        return back()->with('success',  'Data pemesanan berhasil ditambahkan');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function tes()
    {
        return view('layouts.main');
    }
}