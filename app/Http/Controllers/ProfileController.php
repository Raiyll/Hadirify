<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Tampilkan halaman profil
    public function index()
    {
        $profile = Auth::user()->profile;
        return view('profile.index', compact('profile'));
    }

    // Tampilkan form edit profil
    public function edit()
    {
        $profile = Auth::user()->profile;
        return view('profile.edit', compact('profile'));
    }

    // Update profil
    public function update(Request $request)
    {
        $request->validate([
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
        ]);

        $profile = Auth::user()->profile;
        $profile->update($request->only('phone', 'address'));

        return redirect()->route('profile.index')->with('success', 'Profil berhasil diperbarui!');
    }
}
