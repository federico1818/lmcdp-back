<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_states')->insert([
            [
                'name' => 'registered'
            ],
            [
                'name' => 'active'
            ],
            [
                'name' => 'blocked'
            ]
        ]);
    }
}
