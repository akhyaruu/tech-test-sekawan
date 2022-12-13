<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingApproval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $bookings =  DB::table('booking_approvals')
            ->join('bookings', 'booking_approvals.booking_id', '=', 'bookings.id')
            ->join('users', 'booking_approvals.user_id', '=', 'users.id')
            ->join('cars', 'bookings.mobil_id', '=', 'cars.id')
            ->select('bookings.nama as nama_peminjam', 'cars.nama as nama_mobil', 'bookings.tujuan', 'bookings.durasi', 'bookings.tgl_pengajuan', 'bookings.id as booking_id')
            ->where('booking_approvals.user_id', '=', Auth::user()->id)
            ->where('booking_approvals.status', '=', '0')
            ->get();

        return view('user.index', compact('bookings'));
    }


    public function update(Request $request)
    {
        BookingApproval::where('booking_id', '=', $request->booking_id)
            ->where('user_id', '=', Auth::user()->id)
            ->update(['status' => 1]);

        $bookingApprovalsCheck = BookingApproval::where('booking_id', '=', $request->booking_id)->get();
        $count = count($bookingApprovalsCheck);
        $iteration = 0;

        foreach ($bookingApprovalsCheck as $item) {
            if ($item->status == 1) {
                $iteration++;
            }
        }

        // semua user yg di assign sudah menyetujui
        if ($iteration == $count) {
            Booking::where('id', '=', $request->booking_id)->update(['status' => 1]);
        }

        return back()->with('success',  'Persetujuan berhasil diperbarui');
    }
}