<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama_produk' => 'Cimory Fresh Milk',
            'deskripsi' => 'Susu UHT dengan Gizi yang baik.',
            'harga' => 12000,
            'stok' => 50,
        ]);
    }
}
