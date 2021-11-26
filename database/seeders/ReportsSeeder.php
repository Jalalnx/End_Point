<?php

namespace Database\Seeders;

use App\Models\Reports;
use Illuminate\Database\Seeder;
use Database\Factories\ReoprtsFactory;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reports::factory(400)->create();
    }
}
