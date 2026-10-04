<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::insert([
            'name' => 'makan & minum',
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'name' => 'kendaraan',
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'name' => 'rumah',
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'name' => 'olahraga',
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'name' => 'hobi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
