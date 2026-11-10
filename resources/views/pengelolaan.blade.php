@extends('layouts.app')

@section('title', 'Daftar Pemenang')

@section('content')
    <div class="card" style="text-align: left;">
        <h2 style="text-align: center; font-size: 32px; margin-bottom: 10px;">Daftar Pemenang Kopiko</h2>
        <p style="text-align: center; color: #888; margin-bottom: 30px;">Total 10 Pemenang Beruntung</p>

        <div style="max-height: 500px; overflow-y: auto;">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemenang</th>
                        <th>Asal Kota</th>
                        <th>Hadiah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemenang as $index => $p)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td style="font-weight: 600; color: #FFD700;">{{ $p->nama }}</td>
                            <td>{{ $p->kota }}</td>
                            <td>{{ $p->hadiah }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
