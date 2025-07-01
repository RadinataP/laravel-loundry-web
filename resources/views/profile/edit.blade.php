@extends('layouts.app')

@section('title', 'Edit Profil')

@section('content')

<div class="container mx-auto py-12 px-4">
    <h1 class="text-3xl font-bold text-blue-800 mb-8">Edit Profil</h1>

    {{-- Update Profile --}}
    <div class="bg-white p-6 rounded-xl shadow mb-6">
        <h2 class="text-xl font-semibold text-blue-700 mb-4">Informasi Akun</h2>
        @include('profile.partials.update-profile-information-form')
    </div>

    {{-- Update Password --}}
    <div class="bg-white p-6 rounded-xl shadow mb-6">
        <h2 class="text-xl font-semibold text-blue-700 mb-4">Ubah Password</h2>
        @include('profile.partials.update-password-form')
    </div>

    {{-- Hapus Akun --}}
    <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold text-blue-700 mb-4">Hapus Akun</h2>
        @include('profile.partials.delete-user-form')
    </div>
</div>

@endsection
