@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
    <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-6">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-lg font-medium text-gray-800">Informasi Profil</h2>
            <p class="text-sm text-gray-500 mt-1">Kelola informasi profil Anda</p>
        </div>

        <div class="p-6 space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <p class="text-gray-800 mt-1">{{ auth()->user()->name }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <p class="text-gray-800 mt-1">{{ auth()->user()->email }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                <p class="text-gray-800 mt-1">{{ $profile->phone ?? '-' }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Alamat</label>
                <p class="text-gray-800 mt-1">{{ $profile->address ?? '-' }}</p>
            </div>
        </div>

        <div class="bg-gray-50 px-6 py-4 flex justify-end">
            <a href="{{ route('profile.edit') }}" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors">
                Edit Profil
            </a>
        </div>
    </div>
@endsection
