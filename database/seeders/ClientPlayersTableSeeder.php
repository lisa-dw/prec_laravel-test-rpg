<?php

namespace Database\Seeders;

use App\Models\Client\ClientPlayer;
use Illuminate\Database\Seeder;

class ClientPlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientPlayer::factory(20)->create();
    }
}
