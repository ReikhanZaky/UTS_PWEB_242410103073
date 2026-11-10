@extends('layouts.app')

@section('title', 'Login Pemenang')

@section('content')
    <div class="card" style="max-width: 400px; margin: 80px auto;">
        <h2>Masuk Akun Pemenang</h2>
        <p style="margin-bottom: 30px; color: #888;">Silakan login untuk klaim hadiah Anda.</p>

        @if(session('error'))
            <div style="background: #e74c3c; color: white; padding: 10px; border-radius: 8px; margin-bottom: 20px;">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('proses.login') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">Klaim Hadiah</button>
        </form>
    </div>
@endsection
