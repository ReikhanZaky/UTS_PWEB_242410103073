@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="card" style="margin-top: 50px; border: 2px solid #FFD700; box-shadow: 0 0 20px rgba(255, 215, 0, 0.2);">
        <h1 style="font-size: 40px; color: #FFD700; margin-bottom: 10px;">🎉 SELAMAT! 🎉</h1>
        <h2 style="font-size: 28px;">Halo, {{ $user->nama }}!</h2>

        <p style="font-size: 18px; color: #aaa; margin-top: 20px;">Berdasarkan pengundian Kopiko Giveaway, Anda terpilih sebagai pemenang:</p>

        <div style="background: linear-gradient(135deg, #FFD700, #FFA500); color: #121212; padding: 30px; border-radius: 12px; margin: 30px 0; font-size: 32px; font-weight: 800; text-transform: uppercase; box-shadow: 0 4px 15px rgba(255, 215, 0, 0.4);">
            {{ $user->hadiah }}
        </div>

        <p style="font-size: 16px;">Silakan periksa halaman <strong>Profile</strong> Anda untuk memastikan data klaim hadiah sudah benar.</p>
    </div>
@endsection
