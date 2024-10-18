// database/factories/SuppFactory.php
<?php

namespace Database\Factories;

use App\Models\Supp;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuppFactory extends Factory
{
    protected $model = Supp::class;

    public function definition()
    {
        return [
            'kd_supp' => 'S' . $this->faker->unique()->numberBetween(1000, 9999),
            'nama_supp' => $this->faker->company(),
            'alamat' => $this->faker->address(),
            'telp' => $this->faker->phoneNumber(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

// database/migrations/[timestamp]_supp_change.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuppChange extends Migration
{
    public function up()
    {
        Schema::table('supp', function (Blueprint $table) {
            $table->string('nama_supp', 255)->change();
            $table->text('alamat')->change();
            $table->string('telp', 50)->change();
        });
    }

    public function down()
    {
        Schema::table('supp', function (Blueprint $table) {
            $table->string('nama_supp', 50)->change();
            $table->string('alamat', 100)->change();
            $table->string('telp', 15)->change();
        });
    }
}

// database/seeders/SuppSeeder.php
<?php

namespace Database\Seeders;

use App\Models\Supp;
use Illuminate\Database\Seeder;

class SuppSeeder extends Seeder
{
    public function run()
    {
        Supp::factory()->count(10)->create();
    }
}
