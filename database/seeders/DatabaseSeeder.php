<?php

namespace Database\Seeders;

use App\Models\Client\Client;
use App\Models\Client\ClientPlayer;
use App\Models\Player\Player;
use App\Models\Quest\Quest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        if (config('database.default') !== 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }

        try {
            Client::truncate();
            Player::truncate();
            Quest::truncate();
            ClientPlayer::truncate();
        } catch (\Exception $e) {
            dump($e->getMessage());
        }

        $this->call(ClientsTableSeeder::class);
        $this->call(PlayersTableSeeder::class);
        $this->call(QuestsTableSeeder::class);
        $this->call(ClientPlayersTableSeeder::class);

        if (config('database.default') !== 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }
}
