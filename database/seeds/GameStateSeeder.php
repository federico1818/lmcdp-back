<?php

use Illuminate\Database\Seeder;

class GameStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_states')->insert([
            [
                'name' => 'matchmaking'
            ],
            [
                'name' => 'accepted'
            ],
            [
                'name' => 'started'
            ],
            [
                'name' => 'finished'
            ],
            [
                'name' => 'cancelled'
            ]
        ]);
    }
}
