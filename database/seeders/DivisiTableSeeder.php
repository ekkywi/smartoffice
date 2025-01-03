<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DivisiTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('divisi')->insert([
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Information Technology', 'kode_divisi' => 'IT'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Marketing', 'kode_divisi' => 'MKT'],
        ]);
    }
}
