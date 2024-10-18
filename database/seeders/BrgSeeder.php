// database/seeders/BrgSeeder.php
<?php

namespace Database\Seeders;

use App\Models\Brg;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrgSeeder extends Seeder
{
    public function run()
    {
        DB::table('brg')->insert([
            [
                'kd_brg' => 'B001',
                'nm_brg' => 'Komputer',
                'harga' => 5000000,
                'stok' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'kd_brg' => 'B002',
                'nm_brg' => 'Printer',
                'harga' => 2500000,
                'stok' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
