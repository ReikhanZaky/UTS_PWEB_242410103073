<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemenangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // 4 Akun Utama
            ['username' => 'budi', 'password' => '12345', 'nama' => 'Budi Santoso', 'kota' => 'Jakarta', 'hadiah' => 'Mobil Keluarga', 'usia' => 25, 'alamat' => 'Jl. Merdeka No.1, Jakarta', 'telepon' => '081234567890', 'email' => 'budi@gmail.com', 'kode_pos' => '10110'],
            ['username' => 'siti', 'password' => '12345', 'nama' => 'Siti Aminah', 'kota' => 'Bandung', 'hadiah' => 'Motor Matic', 'usia' => 30, 'alamat' => 'Jl. Sudirman No.2, Bandung', 'telepon' => '082345678901', 'email' => 'siti@gmail.com', 'kode_pos' => '40111'],
            ['username' => 'agus', 'password' => '12345', 'nama' => 'Agus Wijaya', 'kota' => 'Surabaya', 'hadiah' => 'Smartphone Terbaru', 'usia' => 22, 'alamat' => 'Jl. Diponegoro No.3, Surabaya', 'telepon' => '083456789012', 'email' => 'agus@gmail.com', 'kode_pos' => '60222'],
            ['username' => 'dewi', 'password' => '12345', 'nama' => 'Dewi Lestari', 'kota' => 'Medan', 'hadiah' => '(Grand Prize) Uang Tunai Miliaran Rupiah', 'usia' => 28, 'alamat' => 'Jl. Gatot Subroto No.4, Medan', 'telepon' => '084567890123', 'email' => 'dewi@gmail.com', 'kode_pos' => '20111'],

            // 6 Data Dummy
            ['username' => null, 'password' => null, 'nama' => 'Andi Pratama', 'kota' => 'Makassar', 'hadiah' => 'Smart TV', 'usia' => 35, 'alamat' => 'Jl. Raya No. 12', 'telepon' => '081211223344', 'email' => 'andipratama@gmail.com', 'kode_pos' => '90111'],
            ['username' => null, 'password' => null, 'nama' => 'Rina Sari', 'kota' => 'Palembang', 'hadiah' => 'Tablet', 'usia' => 24, 'alamat' => 'Jl. Raya No. 45', 'telepon' => '081255667788', 'email' => 'rinasari@gmail.com', 'kode_pos' => '30111'],
            ['username' => null, 'password' => null, 'nama' => 'Dodi Saputra', 'kota' => 'Yogyakarta', 'hadiah' => 'Konsol Game', 'usia' => 29, 'alamat' => 'Jl. Raya No. 7', 'telepon' => '081299887766', 'email' => 'dodisaputra@gmail.com', 'kode_pos' => '55111'],
            ['username' => null, 'password' => null, 'nama' => 'Siska Wulandari', 'kota' => 'Semarang', 'hadiah' => 'Motor Matic', 'usia' => 22, 'alamat' => 'Jl. Raya No. 89', 'telepon' => '081233445566', 'email' => 'siskawulandari@gmail.com', 'kode_pos' => '50111'],
            ['username' => null, 'password' => null, 'nama' => 'Fajar Hidayat', 'kota' => 'Jakarta', 'hadiah' => 'Smartphone Terbaru', 'usia' => 31, 'alamat' => 'Jl. Raya No. 23', 'telepon' => '081277665544', 'email' => 'fajarhidayat@gmail.com', 'kode_pos' => '10110'],
            ['username' => null, 'password' => null, 'nama' => 'Indah Lestari', 'kota' => 'Bandung', 'hadiah' => 'Mobil Keluarga', 'usia' => 27, 'alamat' => 'Jl. Raya No. 56', 'telepon' => '081222334455', 'email' => 'indahlestari@gmail.com', 'kode_pos' => '40111'],
        ];

        // Tambahkan timestamps
        foreach ($data as &$item) {
            $item['created_at'] = now();
            $item['updated_at'] = now();
        }

        // Masukkan ke database
        DB::table('pemenangs')->insert($data);
    }
}
