<?php

namespace Database\Seeders;

use App\Models\Reports;
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
            civillianSeeder::class,
            // ReportsSeeder::class
        ]);
    }
}
