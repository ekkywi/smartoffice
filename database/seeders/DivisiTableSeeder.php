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
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Marketing', 'kode_divisi' => 'MKT'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Sales', 'kode_divisi' => 'MSL'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Marketing Support', 'kode_divisi' => 'MSL'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Bussiness Development', 'kode_divisi' => 'MBD'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Information Technology', 'kode_divisi' => 'IT'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'IT Non Celullar', 'kode_divisi' => 'INC'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'IT Celullar', 'kode_divisi' => 'ITC'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'IT Support', 'kode_divisi' => 'ITS'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Management Information System', 'kode_divisi' => 'MIS'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Finance and Accounting', 'kode_divisi' => 'FAA'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Calculation', 'kode_divisi' => 'FCL'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Cost Control', 'kode_divisi' => 'FCC'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Accounting', 'kode_divisi' => 'FAC'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Efficiency', 'kode_divisi' => 'FEC'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Procurement', 'kode_divisi' => 'FPR'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'PPIC', 'kode_divisi' => 'PPC'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Production Planning', 'kode_divisi' => 'LPP'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Inventory COntrol', 'kode_divisi' => 'LIC'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Shipment', 'kode_divisi' => 'LSH'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Production', 'kode_divisi' => 'PRO'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Printing', 'kode_divisi' => 'PPR'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Lamination', 'kode_divisi' => 'PLM'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Inspection', 'kode_divisi' => 'PIS'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Module Embedding', 'kode_divisi' => 'PME'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Perso Celullar', 'kode_divisi' => 'PRS'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Perso Non Celullar', 'kode_divisi' => 'PRN'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Packing', 'kode_divisi' => 'PPP'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Quality Assurance', 'kode_divisi' => 'QAC'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Production Engineering', 'kode_divisi' => 'QPE'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Quality Control', 'kode_divisi' => 'QLC'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Technic', 'kode_divisi' => 'TEC'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Human Resource and General Affair', 'kode_divisi' => 'HRG'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Human Resource', 'kode_divisi' => 'HHR'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'General Affair', 'kode_divisi' => 'HGA'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Legal', 'kode_divisi' => 'HLG'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Internal Security', 'kode_divisi' => 'SSI'],
            ['divisi_id' => (string) Str::uuid(), 'nama_divisi' => 'Quality Management System', 'kode_divisi' => 'QMS'],
        ]);
    }
}
