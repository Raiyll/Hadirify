<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{ function login(Request $request)
    {
        // dd("Masuk");
        // Validate the request data
        $request->validate([
            'name' => 'required|String',
            'password' => 'required|min:6',
        ]);
        $user = User::where('name', $request->name)->first();

        // Attempt to log the user in
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            session()->regenerate();
            // Redirect to the intended page or dashboard
            return redirect()->intended('dashboard');
        }

        // If authentication fails, redirect back with an error message
        return redirect()->back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }

    function register(Request $request) {
        dd($request);
    }
}

class AttendanceController extends Controller
{
    public function showQRScanner()
    {
        $user = Auth::user();
        $todayAttendance = $user->attendances()->whereDate('created_at', today())->first();

        return view('attendance.qr-scanner', [
            'user' => $user,
            'todayAttendance' => $todayAttendance,
        ]);
    }

    public function processScan(Request $request)
    {
        $request->validate([
            'qr_data' => 'required|string',
        ]);

        $user = Auth::user();
        $qrData = json_decode($request->qr_data, true);

        if (!$qrData || !isset($qrData['location_id'])) {
            return back()->with('error', 'QR Code tidak valid');
        }

        if ($user->attendances()->whereDate('created_at', today())->exists()) {
            return back()->with('error', 'Anda sudah melakukan presensi hari ini');
        }

        $attendance = $user->attendances()->create([
            'location_id' => $qrData['location_id'],
            'check_in' => now(),
            'status' => 'on_time',
        ]);

        return redirect()->route('dashboard')
               ->with('success', 'Presensi berhasil dicatat: ' . $attendance->check_in);
    }

    public function history()
    {
        $attendances = Auth::user()->attendances()
                         ->orderBy('created_at', 'desc')
                         ->paginate(10);

        return view('attendance.history', compact('attendances'));
    }
}

