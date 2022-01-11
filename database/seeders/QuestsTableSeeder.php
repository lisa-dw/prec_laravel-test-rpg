<?php

namespace Database\Seeders;

use App\Models\Quest\Quest;
use Illuminate\Database\Seeder;

class QuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quest::factory(20)->create();
    }
}
