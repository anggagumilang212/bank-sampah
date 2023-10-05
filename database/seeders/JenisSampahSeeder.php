<?php

namespace Database\Seeders;

use App\Models\JenisSampah;
use Illuminate\Database\Seeder;

class JenisSampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisSampah::create([
            'nama' => 'kertas',
            'deskripsi' => 'sampah kertas',
            'foto' => 'fotojenissampah/kertas.jpg',
            'harga' => '100.000',
        ]);

        JenisSampah::create([
            'nama' => 'plastik',
            'deskripsi' => 'sampah plastik',
            'foto' => 'fotojenissampah/plastik.jpeg',
            'harga' => '200.000',
        ]);
    }
}
