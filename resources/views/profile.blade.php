@extends('layouts.app')

@section('title', 'Profil Pemenang')

@section('content')
    <div class="card" style="max-width: 500px; margin: 0 auto;">
        <div style="width: 100px; height: 100px; background: #FFD700; color: #121212; font-size: 40px; font-weight: bold; display: flex; align-items: center; justify-content: center; border-radius: 50%; margin: 0 auto 20px;">
            {{ substr($user->nama, 0, 1) }}
        </div>

        <h2>Data Diri Pemenang</h2>
        <p style="color: #888; margin-bottom: 30px;">Pastikan data di bawah ini sudah sesuai dengan KTP.</p>

        <div style="text-align: left; background: #121212; padding: 20px; border-radius: 10px; border: 1px solid #333; margin-bottom: 20px;">
            <p style="margin-bottom: 10px;"><strong>Nama Lengkap:</strong> <br> {{ $user->nama }}</p>
            <p style="margin-bottom: 10px;"><strong>Usia:</strong> <br> {{ $user->usia }} Tahun</p>
            <p style="margin-bottom: 10px;"><strong>Alamat:</strong> <br> {{ $user->alamat }}</p>
            <p style="margin-bottom: 10px;"><strong>Nomor Telepon:</strong> <br> {{ $user->telepon }}</p>
            <p style="margin-bottom: 10px;"><strong>Alamat Email:</strong> <br> {{ $user->email }}</p>
            <p><strong>Kode Pos:</strong> <br> {{ $user->kode_pos }}</p>
        </div>

        <a href="{{ route('logout') }}" class="btn btn-danger">Logout / Keluar</a>
    </div>
@endsection
