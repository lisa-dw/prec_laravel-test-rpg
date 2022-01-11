<?php

namespace Database\Seeders;

use App\Models\Player\Player;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::factory(20)->create();
    }
}
