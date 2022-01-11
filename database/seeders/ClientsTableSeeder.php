<?php

namespace Database\Seeders;

use App\Models\Client\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory(20)->create();
    }
}
