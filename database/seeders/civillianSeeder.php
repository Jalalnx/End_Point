<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class civillianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::factory(200)->create([
           'is_admin' => 0
       ]);
    }
}
