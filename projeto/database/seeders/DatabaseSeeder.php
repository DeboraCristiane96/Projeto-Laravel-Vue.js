<?php

namespace Database\Seeders;

use App\Models\Pratos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            CardapioSeeder::class,
            PratosSeeder::class
        ]);

    }
}
