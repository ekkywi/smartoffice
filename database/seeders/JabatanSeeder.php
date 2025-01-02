<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JabatanSeeder extends Seeder
{
    public function run()
    {
        $jabatans = [
            ['jabatan_id' => (string) Str::uuid(), 'nama_jabatan' => 'System Administrator'],
            ['jabatan_id' => (string) Str::uuid(), 'nama_jabatan' => 'Manager'],
            ['jabatan_id' => (string) Str::uuid(), 'nama_jabatan' => 'Kepala Bagian'],
            ['jabatan_id' => (string) Str::uuid(), 'nama_jabatan' => 'Supervisor'],
            ['jabatan_id' => (string) Str::uuid(), 'nama_jabatan' => 'Staff'],
            ['jabatan_id' => (string) Str::uuid(), 'nama_jabatan' => 'Admin'],
            ['jabatan_id' => (string) Str::uuid(), 'nama_jabatan' => 'Operator'],
        ];

        DB::table('jabatan')->insert($jabatans);
    }
}
