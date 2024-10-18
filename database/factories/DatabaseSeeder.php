// database/seeders/DatabaseSeeder.php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            BrgSeeder::class,
            SuppSeeder::class,
            // Tambahkan seeder lain di sini
        ]);
    }
}
