<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function pemesanan()
    {
        $pemesanan = DB::table('booking_approvals')
            ->join('bookings', 'booking_approvals.booking_id', '=', 'bookings.id')
            ->join('cars', 'cars.id', '=', 'bookings.mobil_id')->get();
        return view('admin.pemesanan');
    }

    public function addPemesanan()
    {
        return view('admin.index');
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