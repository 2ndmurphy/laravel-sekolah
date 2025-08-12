<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create(['nama' => 'Nasi Goreng', 'kategori' => 'makanan', 'harga' => 15000]);
        Menu::create(['nama' => 'Ayam Bakar', 'kategori' => 'makanan', 'harga' => 20000]);
        Menu::create(['nama'=> 'Roti Bakar', 'kategori' => 'makanan', 'harga' => 10000]);
        Menu::create(['nama'=> 'Air Mineral', 'kategori' => 'minuman', 'harga' => 3000]);
        Menu::create(['nama'=> 'Jus Jeruk', 'kategori' => 'minuman', 'harga' => 7000]);
        Menu::create(['nama'=> 'Mie Goreng', 'kategori' => 'makanan', 'harga' => 12000]);
        Menu::create(['nama'=> 'Keripik Singkong', 'kategori' => 'snack', 'harga' => 5000]);
        Menu::create(['nama'=> 'Kacang Goreng', 'kategori' => 'snack', 'harga' => 6000]);
        Menu::create(['nama'=> 'Popcorn', 'kategori' => 'snack', 'harga' => 7000]);
        Menu::create(['nama'=> 'Cokelat Batangan', 'kategori' => 'snack', 'harga' => 8000]);
    }
}
